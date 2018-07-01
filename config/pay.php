<?php

return [
    'alipay' => [
        'app_id'         => '2016091400506881',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsrTanfckYkDSlG0Ea4mNviKDBufiZmXxK5o74VBLuP2e+dpvq78/hlQciPQh5XUio5UYcLPq0MzoWOxqPJ7IuBgye6aXt0ejYrLJ55SzpG8f2gntK6qB38HKTa1KmdTZz396EepfD7nUDanzqW6BVoBridRDmqTkjQbWRycVlNxBB1/pXH8GpQa3gX1UEDi0i5zU6Av1miHyTWymhWuZeXVH9uLOBejfQeIR3/WGGk2gMeMNLHkK4wsQmCJJMag/GczhXpas6m4gDbp0QHgx4BiOIGf1+wVXL8BDbVYigv9hgseChvI54NDyMHqTkFMqzr5Inp5SDRuYbPvqpTYcRwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAv7dezPJEcttsx5HF8jmNyZPdLpk7GAOAEhGhZKLJiHaIIxC7Vq+SBuxlZqowcMd66X1U1KsErv8T6KadoD3r4bBg4wJ+zfHIgb1ZI2z63PuigmK6Kz270HeIVFz1L2+Nic8xyn7PnwxlOgS31pfrrAN1sel5gVWHqhFhFyxCk2rfzG30MwYVVvSNRO6arxPkX7xukA3VGpbEqFhGAfl74jWsm/+LjRP+HCVclMX7WH6ueaVCWKcVErG0lM7FVNwttuf1IMmmYm/0gNhewkYziATDpqvA8MAJ8UNYwB23Bqri3LEzcZqvjXu0rrZx8FNHcQT11Awh4iLKFPC7s96bawIDAQABAoIBAHVuTZw9vV2ZOB1aFiSTylyxvKaBZ2gDJNxsfi5VZBq5eBP6eLXVXx3siQQEtR0vowMIKQEHLBxA1CIKhLyVkTmxvvbuHVvqgMWvhL0lUNgxLk6tSJmZ+8Pqo9ABDJIcw1apWjdNy8EBZ7PNFgpVDh9UEzCB8VIeYLX0ZUM7ciA3I86wQvG8wn0pztEyX2Z3Aryc1RnXDtd9xRSDbQSVpy0h6LtKCXj7i8aDDzSFwdlcbEjghE+S6LexE9yK+pqT0iTrpNrN46qWINLZeW58/KIdZYU4Xje2FwJTe7GAOabSxSq/3YKnGWOvMXwfRQfzFGwyS7PCMwJ4enQ5ngvghCkCgYEA6XSF5goMXi5d/vU7AB6ZIByIcjkizB7IcaweoytXoSCbbd8tSiQkKkkqFfuSgDb6KZCOCjjxG5R1mm/ku8/CMScHMIe56CbVdAWaRsuuqoHT6+IfXjfgJVRX3GYxnrWFBUwYuX+0ql2n2dtrbMx0jzSX/sQvh6hMGsJbWI1rxT8CgYEA0jr6omrQyP7+fd1QADYs/tIEUWT0DFC9cKgUxB727Yt8K8omsPDPMmQsHt1hR5iUCYQgy+19LWf0QmmKUIBCLW6ij06g4PqqcTiN48XAriBHnJ2DpWUyhjIjCZSzkQY7c87x/3LFgK0kaRejmtStXTgG9L2FGjMH8V3lcEcXAtUCgYA6KOxexewU3opORTvgqL7PMCySAEf6AEVBhHbRga/AFYaDVdFLojtcSYPxnA4AYTHrfvbT9yGiFFdEFVIvs++WHTn+TiHzgxE0aVzo/D9UfSmVn2zfJR5zTlLhNphwCJrOGgoi1Hzm4JQ7gx19KmZzcs/XCXsp2bS0Ce2F3x2VMwKBgAFUzEeBA6dyLexgHWSS8z/91ncpe34keL6g4djIFWo1quigFBSkwbsg9UKQxk/swGs7AfYon9VMxjgxcOXHmiOtgqwDpHMoQzIKWKOrmefAXpO4T6AZfvNol940qdpuPqwiEFg8wtFox0U/GBMf66UeeLTOCmy7C/7USGKooJWtAoGAPiK2bc2wRb/w9gmacz6/p5l7AkfjuL+JHELq2eCwlApmx25bfQi9XRsfU2A/NAdLapQ16sB7jHybLUaRoRLV/TtzijwzJEVv+68gvqT4yIHdpbKBxv96UUgKNS0bySb04g0DYOe2EzP7A9ZD7+sgP2QmKOpp7xsqk8kayusI69M=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
