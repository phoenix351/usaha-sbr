select
    `regions`.`id` AS `id`,
    `regions`.`provinsi` AS `provinsi`,
    `regions`.`nama_provinsi` AS `nama_provinsi`,
    `regions`.`kabupaten` AS `kabupaten`,
    `regions`.`nama_kabupaten` AS `nama_kabupaten`,
    `regions`.`kecamatan` AS `kecamatan`,
    `regions`.`nama_kecamatan` AS `nama_kecamatan`,
    `regions`.`desa` AS `desa`,
    `regions`.`nama_desa` AS `nama_desa`,
    `b`.`region_id` AS `region_id`,
    `b`.`pml` AS `pml`,
    `b`.`jumlah_entri` AS `jumlah_entri`,
    `b`.`Clean` AS `Clean`,
    `b`.`Error` AS `Error`,
    `b`.`Warning` AS `Warning`,
    `b`.`Submitted` AS `Submitted`,
    `b`.`Open` AS `Open`
from
    (
        `regions`
        left join (
            select
                `c`.`region_id` AS `region_id`,
                `c`.`pml` AS `pml`,
                count(0) AS `jumlah_entri`,
                sum(
                    case
                        when `c`.`docState` = 'C' then 1
                        else 0
                    end
                ) AS `Clean`,
                sum(
                    case
                        when `c`.`docState` = 'E' then 1
                        else 0
                    end
                ) AS `Error`,
                sum(
                    case
                        when `c`.`docState` = 'W' then 1
                        else 0
                    end
                ) AS `Warning`,
                sum(
                    case
                        when `c`.`submit_status` = 1 then 1
                        else 0
                    end
                ) AS `Submitted`,
                sum(
                    case
                        when `c`.`submit_status` = 2 then 1
                        else 0
                    end
                ) AS `Open`
            from
                (
                    select
                        `responses`.`region_id` AS `region_id`,
                        `responses`.`r110` AS `r110`,
                        `responses`.`pml` AS `pml`,
                        `responses`.`docState` AS `docState`,
                        `responses`.`submit_status` AS `submit_status`
                    from
                        `responses`
                    group by
                        `responses`.`region_id`,
                        `responses`.`r110`,
                        `responses`.`pml`,
                        `responses`.`docState`,
                        `responses`.`submit_status`
                ) `c`
            group by
                `c`.`region_id`,
                `c`.`pml`
        ) `b` on (`regions`.`id` = `b`.`region_id`)
    )