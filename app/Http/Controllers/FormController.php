<?php

namespace App\Http\Controllers;

// use App\Models\Response;
// use App\Models\AgustusResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Region;
use App\Models\Response;
use App\Models\ResponseArt;
use Hamcrest\Arrays\IsArray;
use Illuminate\Support\Facades\DB;
use Throwable;

use function PHPUnit\Framework\isNull;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $region_id = "")
    {
        $pml = auth()->user()->name;
        // $region_id = '7106020020';
        $kabupaten = Region::all()->unique('kabupaten')->map(fn($kabupaten) => [
            'id' => $kabupaten->kabupaten,
            'nama' => '[' . $kabupaten->kabupaten . '] ' . $kabupaten->nama_kabupaten
        ]);

        $data = Response::select('id', 'region_id', 'nama_usaha', 'nama_komersial', 'docState', 'kategori', 'submit_status', 'updated_at')
            ->where('region_id', '=', $region_id)
            ->get();
        $region = null;
        if ($region_id != null) {
            $region = Region::where('id', $region_id)->first();
        }
        // dd($data);
        return Inertia::render('Form/Index', [
            "kabupatens" => $kabupaten,
            "data" => $data,
            "region" => $region
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $region_id)
    {
        // $pml = auth()->user()->name;
        // $idbs = $region_id;
        // $pcl = User::all()->where('kabupaten', $region_id)->where('status', '2')->map(fn($pcl) =>[
        //     "label" => $pcl->name,
        //     "value" => $pcl->name,
        // ]);
        $kab = DB::scalar(
            "select kabupaten from regions where id =" . $region_id
        );
        $kab = str_pad($kab, 2, '0', STR_PAD_LEFT);
        // if ($kab != auth()->user()->kabupaten) {
        //     return inertia_location('/');
        // }
        // $res = Response::select('r110 as label', 'r110 as value')
        //     ->where('region_id', '=', $region_id)
        //     ->get()->toArray();
        // $res = json_decode(json_encode($res), true);

        // $region = Region::findOrFail($region_id);


        $prefill = Region::all()->where('id', $region_id)->map(fn($prefill) => [
            [
                "dataKey" => "prov",
                "answer" => '[' . $prefill->provinsi . '] ' . $prefill->nama_provinsi
            ],
            [
                "dataKey" => "kab",
                "answer" => '[' . $prefill->kabupaten . '] ' . $prefill->nama_kabupaten
            ],
            [
                "dataKey" => "kec",
                "answer" => '[' . $prefill->kecamatan . '] ' . $prefill->nama_kecamatan
            ],
            [
                "dataKey" => "desa",
                "answer" => '[' . $prefill->desa . '] ' . $prefill->nama_desa
            ]
        ]);


        return Inertia::render(getViewPath(), [
            "prefill" => $prefill,
            "region_id" => $region_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    private function getCurrentValue($answer): string | array | null
    {
        $currentValue = '';
        if (is_array($answer)) {
            if (array_key_exists(0, $answer)) {
                if (!is_null($answer[0])) {
                    if (is_array($answer[0])) {

                        $currentValue = $answer[0]['value'];
                    } else {

                        $currentValue = $answer[0];
                    }
                }
            }
            if (count($answer) > 1) {
                $currentValue = [];

                foreach ($answer as $key => $value) {
                    if (is_array($value)) {

                        array_push($currentValue, $value['value']);
                    } else {
                        array_push($currentValue, $value);
                    }
                }
                $currentValue = json_encode($currentValue);
            }
        } else {
            $currentValue = $answer;
        }

        return $currentValue;
    }
    public function store(Request $request, string $region_id, $id)
    {
        try {
            $ResponseModel = getResponseModel();
            $req = $request->all();
            // dd($req);
            $answers = $req['answers'];

            // $response = new $ResponseModel(["region_id" => $region_id]);
            if (!$id) {
                $response = new $ResponseModel();
            } else {
                $response = $ResponseModel::find($id);
            }
            foreach ($answers as $key => $value) {
                # code...
                if (is_null($value["answer"])) {
                    continue;
                }
                if (is_array($value["answer"])) {

                    $response[$value['dataKey']] = json_encode($value['answer']);
                    continue;
                }
                $response[$value['dataKey']] = $value['answer'];
            }
            $response["docState"] = $req['docState'];
            $response["submit_status"] = '1';
            unset($response->prov);
            unset($response->kab);
            unset($response->kec);
            unset($response->desa);
            // dd($response);
            // $response->location =  (string)json_encode($response->location);

            $response->save();

            // delete all arts in corresponding response id

            return response()->json([
                'message' => 'Data berhasil disimpan',
                'id' => $response->id,
            ], 201);
        } catch (Throwable $th) {
            // return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
            throw $th;
        }
    }

    public function submit(Request $request, string $region_id)
    {
        try {
            $ResponseModel = getResponseModel();
            $req = $request->all();
            // dd($req);
            $answers = $req['answers'];

            $response = new $ResponseModel(["region_id" => $region_id]);
            foreach ($answers as $key => $value) {
                # code...
                if (is_null($value["answer"])) {
                    continue;
                }
                if (is_array($value["answer"])) {

                    $response[$value['dataKey']] = json_encode($value['answer']);
                    continue;
                }
                $response[$value['dataKey']] = $value['answer'];
            }
            $response["docState"] = $req['docState'];
            $response["submit_status"] = '1';
            unset($response->prov);
            unset($response->kab);
            unset($response->kec);
            unset($response->desa);
            // dd($response);
            // $response->location =  (string)json_encode($response->location);

            $response->save();

            return response()->json([
                'message' => 'Data berhasil disubmit',
                'data' => $response
                // 'id' => $response->nurt
            ], 201);
        } catch (\Exception $e) {
            // throw $th;
            return response()->json([
                'message' => 'Error submitting data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $region_id, string $id)
    {
        $pml = auth()->user()->name;
        $idbs = $region_id;
        // $pcl = User::all()->where('kabupaten', $region_id)->where('status', '2')->map(fn($pcl) =>[
        //     "label" => $pcl->name,
        //     "value" => $pcl->name,
        // ]);
        $kab = DB::scalar(
            "select kabupaten from regions where id =" . $region_id
        );
        $kab = str_pad($kab, 2, "0", STR_PAD_LEFT);





        $responses = Response::find($id)->toArray();

        // $responses = (array)$responses;
        $notQuestion = ['id', 'region_id', 'submit_status', 'updated_at', 'created_at', 'docState',];
        $responses = array_diff_key($responses, array_flip($notQuestion));

        $field = array('id', 'region_id',  'hasil_kunjungan');

        $response = [];
        $responses["location"] = json_decode($responses["location"], true);
        $responses["kategori"] = json_decode($responses["kategori"], true);
        // dd(gettype($responses["kategori"][0]));
        foreach ($responses as $key => $value) {
            $response[] = [
                'dataKey' => $key,
                'answer' => $value,
            ];
        }

        // dd($response);

        $prefill = Region::all()->where('id', $idbs)->map(fn($prefill) => [
            [
                "dataKey" => "prov",
                "answer" => '[' . $prefill->provinsi . '] ' . $prefill->nama_provinsi
            ],
            [
                "dataKey" => "kab",
                "answer" => '[' . $prefill->kabupaten . '] ' . $prefill->nama_kabupaten
            ],
            [
                "dataKey" => "kec",
                "answer" => '[' . $prefill->kecamatan . '] ' . $prefill->nama_kecamatan
            ],
            [
                "dataKey" => "desa",
                "answer" => '[' . $prefill->desa . '] ' . $prefill->nama_desa
            ],

        ]);
        $responses = [
            "prefill" => $prefill,
            "response" => $response,
            "region_id" => $region_id,

        ];

        // dd($responses);
        return Inertia::render(getViewPath(), $responses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $region_id, string $id)
    {
        try {
            $ResponseModel = getResponseModel();
            $req = $request->all();
            // dd($id);
            $answers = $req['answers'];

            // $response = new $ResponseModel(["region_id" => $region_id]);
            if (!$id) {
                $response = new $ResponseModel();
            } else {
                $response = $ResponseModel::find($id);
            }
            foreach ($answers as $key => $value) {
                # code...
                if (is_null($value["answer"])) {
                    continue;
                }
                if (is_array($value["answer"])) {

                    $response[$value['dataKey']] = json_encode($value['answer']);
                    continue;
                }
                $response[$value['dataKey']] = $value['answer'];
            }
            $response["docState"] = $req['docState'];
            $response["submit_status"] = '1';
            unset($response->prov);
            unset($response->kab);
            unset($response->kec);
            unset($response->desa);

            $response->save();
            return response()->json([
                'message' => 'Data berhasil disubmit',
                'id' => $response->id
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error submitting data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Response $response)
    {
        try {
            //code...
            $arts = ResponseArt::where('response_id', $response->id)->get();
            DB::beginTransaction();
            foreach ($arts as $art) {
                $art->delete();
            }
            $response->delete();
            DB::commit();

            return response()->json(['message' => 'successfully deleted response!'], 403);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => 'Oops Something bad happen!'], 500);
            // throw $th;
        }
    }
}
