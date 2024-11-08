<?php

return [
    'list' => [
        [
            'group' => 'auth',
            'key' => 'failed',
            'text' => [
                'id' => 'Kredensial ini tidak cocok dengan catatan kami.',
                'en' => 'These credentials do not match our records.'
            ]
        ],
        [
            'group' => 'auth',
            'key' => 'password',
            'text' => [
                'id' => 'Password yang diberikan salah.',
                'en' => 'The provided password is incorrect.'
            ]
        ],
        [
            'group' => 'auth',
            'key' => 'throttle',
            'text' => [
                'id' => 'Terlalu banyak upaya login. Silakan coba lagi dalam :detik detik.',
                'en' => 'Too many login attempts. Please try again in :seconds seconds.'
            ]
        ],
        [
            'group' => 'error',
            'key' => 'flash.message',
            'text' => [
                'id' => 'Ada :amount kesalahan dalam formulir Anda. Silakan periksa dan coba lagi',
                'en' => 'There are :amount error(s) in your form. Please check and try again'
            ]
        ],
        [
            'group' => 'error',
            'key' => 'back_home',
            'text' => [
                'id' => 'Kembali ke halaman',
                'en' => 'Back to home'
            ]
        ],
        [
            'group' => 'error',
            'key' => '401.title',
            'text' => [
                'id' => 'Permintaan Tidak Sah',
                'en' => 'Unauthorized Request'
            ]
        ],
        [
            'group' => 'error',
            'key' => '401.description',
            'text' => [
                'id' => 'Akses Tidak Sah karena kredensial atau akses tidak valid',
                'en' => 'Unauthorized Access due invalid credential or access'
            ]
        ],
        [
            'group' => 'error',
            'key' => '403.title',
            'text' => [
                'id' => 'Akses Dilarang',
                'en' => 'Forbidden Access'
            ]
        ],
        [
            'group' => 'error',
            'key' => '403.description',
            'text' => [
                'id' => 'Akses Dilarang karena kredensial atau akses tidak valid',
                'en' => 'Forbidden Access due invalid credential or access'
            ]
        ],
        [
            'group' => 'error',
            'key' => '404.title',
            'text' => [
                'id' => 'halaman tidak ditemukan',
                'en' => 'Page not found'
            ]
        ],
        [
            'group' => 'error',
            'key' => '404.description',
            'text' => [
                'id' => 'Maaf, tetapi halaman yang Anda minta tidak ditemukan',
                'en' => 'We are sorry, but the page you requested was not found'
            ]
        ],
        [
            'group' => 'error',
            'key' => '419.title',
            'text' => [
                'id' => 'Sesi Berakhir',
                'en' => 'Session Expired'
            ]
        ],
        [
            'group' => 'error',
            'key' => '419.description',
            'text' => [
                'id' => 'Sesi Anda telah berakhir. Silahkan refresh dan coba lagi',
                'en' => 'Your session has expired. Please refresh and try again'
            ]
        ],
        [
            'group' => 'error',
            'key' => '429.title',
            'text' => [
                'id' => 'Terlalu Banyak Permintaan',
                'en' => 'Too Many Requests'
            ]
        ],
        [
            'group' => 'error',
            'key' => '429.description',
            'text' => [
                'id' => 'Terlalu Banyak Permintaan. Silahkan coba lagi nanti',
                'en' => 'Too Many Requests. Please try again later'
            ]
        ],
        [
            'group' => 'error',
            'key' => '500.title',
            'text' => [
                'id' => 'Kesalahan Server',
                'en' => 'Server Error'
            ]
        ],
        [
            'group' => 'error',
            'key' => '500.description',
            'text' => [
                'id' => 'Server mengalami kesalahan internal atau kesalahan konfigurasi dan tidak dapat menyelesaikan permintaan Anda',
                'en' => 'The server encountered an internal error or misconfiguration and was unable to complete your request'
            ]
        ],
        [
            'group' => 'error',
            'key' => '503.title',
            'text' => [
                'id' => 'Service Tidak Tersedia',
                'en' => 'Service Unavailable'
            ]
        ],
        [
            'group' => 'error',
            'key' => '503.description',
            'text' => [
                'id' => 'Service tidak tersedia untuk sementara waktu. Silahkan coba lagi nanti',
                'en' => 'Service is temporarily unavailable. Please try again later'
            ]
        ],
        [
            'group' => 'footer',
            'key' => 'copyright',
            'text' => [
                'id' => 'Hak cipta © :year :name',
                'en' => 'Copyright © :year :name'
            ]
        ],
        [
            'group' => 'form',
            'key' => 'button.submit.add',
            'text' => [
                'id' => 'Menambahkan',
                'en' => 'Add'
            ]
        ],
        [
            'group' => 'form',
            'key' => 'button.submit.edit',
            'text' => [
                'id' => 'Memperbarui',
                'en' => 'Update'
            ]
        ],
        [
            'group' => 'form',
            'key' => 'button.reset',
            'text' => [
                'id' => 'Atur Ulang',
                'en' => 'Reset'
            ]
        ],
        [
            'group' => 'form',
            'key' => 'button.reload',
            'text' => [
                'id' => 'Muat Ulang',
                'en' => 'Reload'
            ]
        ],
        [
            'group' => 'form',
            'key' => 'button.back',
            'text' => [
                'id' => 'Kembali',
                'en' => 'Back'
            ]
        ],
        [
            'group' => 'model',
            'key' => 'activity.description',
            'text' => [
                'id' => 'Model :model berhasil :event',
                'en' => 'Model :model successfuly :event'
            ]
        ],
        [
            'group' => 'rule',
            'key' => 'language.message',
            'text' => [
                'id' => 'Data bahasa tidak valid',
                'en' => 'Invalid language data'
            ]
        ],
        [
            'group' => 'rule',
            'key' => 'guard_name.message',
            'text' => [
                'id' => 'Jenis platform tidak valid',
                'en' => 'Invalid guard name'
            ]
        ],
        [
            'group' => 'rule',
            'key' => 'gender.message',
            'text' => [
                'id' => 'Jenis kelamin tidak valid',
                'en' => 'Invalid gender'
            ]
        ],
        [
            'group' => 'rule',
            'key' => 'role.message',
            'text' => [
                'id' => 'Data peran tidak valid',
                'en' => 'Invalid role data'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'empty.table',
            'text' => [
                'id' => 'Belum ada data yang tersedia',
                'en' => 'No data available yet'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'proccess',
            'text' => [
                'id' => 'Sedang memproses...',
                'en' => 'Processing...'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'length',
            'text' => [
                'id' => 'tampilkan _MENU_ data',
                'en' => 'show _MENU_ data'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'info',
            'text' => [
                'id' => 'menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                'en' => 'show _START_ to _END_ of _TOTAL_ data'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'infoEmpty',
            'text' => [
                'id' => 'menampilkan 0 sampai 0 dari 0 data',
                'en' => 'show 0 to 0 of 0 data'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'infoFilter',
            'text' => [
                'id' => '(disaring dari _MAX_ data)',
                'en' => '(filtered from _MAX_ data)'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'search',
            'text' => [
                'id' => 'Mencari',
                'en' => 'Search'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'infoThousand',
            'text' => [
                'id' => ',',
                'en' => ','
            ]
        ],
        [
            'group' => 'table',
            'key' => 'loading',
            'text' => [
                'id' => 'Sedang memuat...',
                'en' => 'Loading...'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'actions',
            'text' => [
                'id' => 'Aksi',
                'en' => 'Actions'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'aria.newest',
            'text' => [
                'id' => ': Centang untuk mengurutkan kolom dalam urutan menaik',
                'en' => '": Tick to sort columns in ascending order'
            ]
        ],
        [
            'group' => 'table',
            'key' => 'aria.oldest',
            'text' => [
                'id' => ': Centang untuk mengurutkan kolom ke bawah',
                'en' => ': Tick to sort column down'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'accepted',
            'text' => [
                'id' => ':attribute harus diterima.',
                'en' => 'The :attribute must be accepted.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'accepted_if',
            'text' => [
                'id' => ':attribute harus diterima ketika :lainnya adalah :value.',
                'en' => 'The :attribute must be accepted when :other is :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'active_url',
            'text' => [
                'id' => ':attribute bukan URL yang valid.',
                'en' => 'The :attribute is not a valid URL.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'after',
            'text' => [
                'id' => ':attribute harus berisi tanggal setelah :date.',
                'en' => 'The :attribute must be a date after :date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'after_or_equal',
            'text' => [
                'id' => ':attribute harus berisi tanggal setelah atau sama dengan :date.',
                'en' => 'The :attribute must be a date after or equal to :date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'alpha',
            'text' => [
                'id' => ':attribute hanya boleh berisi huruf.',
                'en' => 'The :attribute must only contain letters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'alpha_dash',
            'text' => [
                'id' => ':attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
                'en' => 'The :attribute must only contain letters, numbers, dashes and underscores.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'alpha_num',
            'text' => [
                'id' => ':attribute hanya boleh berisi huruf dan angka.',
                'en' => 'The :attribute must only contain letters and numbers.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'array',
            'text' => [
                'id' => ':attribute harus berisi sebuah array.',
                'en' => 'The :attribute must be an array.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'before',
            'text' => [
                'id' => ':attribute harus berisi tanggal sebelum :date.',
                'en' => 'The :attribute must be a date before :date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'before_or_equal',
            'text' => [
                'id' => ':attribute harus berisi tanggal sebelum atau sama dengan :date.',
                'en' => 'The :attribute must be a date before or equal to :date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'between.numeric',
            'text' => [
                'id' => ':attribute harus bernilai antara :min sampai :max.',
                'en' => 'The :attribute must be between :min and :max.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'between.file',
            'text' => [
                'id' => ':attribute harus berukuran antara :min sampai :max kilobita.',
                'en' => 'The :attribute must be between :min and :max kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'between.string',
            'text' => [
                'id' => ':attribute harus berisi antara :min sampai :max karakter.',
                'en' => 'The :attribute must be between :min and :max characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'between.array',
            'text' => [
                'id' => ':attribute harus memiliki :min sampai :max anggota.',
                'en' => 'The :attribute must have between :min and :max items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'boolean',
            'text' => [
                'id' => ':attribute harus bernilai true atau false',
                'en' => 'The :attribute field must be true or false.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'confirmed',
            'text' => [
                'id' => 'Konfirmasi :attribute tidak cocok.',
                'en' => 'The :attribute confirmation does not match.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'current_password',
            'text' => [
                'id' => 'Kata sandi salah.',
                'en' => 'The password is incorrect.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'date',
            'text' => [
                'id' => ':attribute bukan tanggal yang valid.',
                'en' => 'The :attribute is not a valid date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'date_equals',
            'text' => [
                'id' => ':attribute harus berisi tanggal yang sama dengan :date.',
                'en' => 'The :attribute must be a date equal to :date.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'date_format',
            'text' => [
                'id' => ':attribute tidak cocok dengan format :format.',
                'en' => 'The :attribute does not match the format :format.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'declined',
            'text' => [
                'id' => ':attribute harus ditolak.',
                'en' => 'The :attribute must be declined.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'declined_if',
            'text' => [
                'id' => ':attribute harus ditolak ketika :other adalah :value.',
                'en' => 'The :attribute must be declined when :other is :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'different',
            'text' => [
                'id' => ':attribute dan :other harus berbeda.',
                'en' => 'The :attribute and :other must be different.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'digits',
            'text' => [
                'id' => ':attribute harus terdiri dari :digits angka.',
                'en' => 'The :attribute must be :digits digits.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'digits_between',
            'text' => [
                'id' => ':attribute harus terdiri dari :min sampai :max angka.',
                'en' => 'The :attribute must be between :min and :max digits.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'dimensions',
            'text' => [
                'id' => ':attribute tidak memiliki dimensi gambar yang valid.',
                'en' => 'The :attribute has invalid image dimensions.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'distinct',
            'text' => [
                'id' => ':attribute memiliki nilai yang duplikat.',
                'en' => 'The :attribute field has a duplicate value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'email',
            'text' => [
                'id' => ':attribute harus berupa alamat surel yang valid.',
                'en' => 'The :attribute must be a valid email address.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'ends_with',
            'text' => [
                'id' => ':attribute harus diakhiri salah satu dari berikut: :values.',
                'en' => 'The :attribute must end with one of the following: :values.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'enum',
            'text' => [
                'id' => ':atribut yang dipilih tidak valid.',
                'en' => 'The selected :attribute is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'exists',
            'text' => [
                'id' => ':attribute yang dipilih tidak valid.',
                'en' => 'The selected :attribute is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'file',
            'text' => [
                'id' => ':attribute harus berupa sebuah berkas.',
                'en' => 'The :attribute must be a file.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'filled',
            'text' => [
                'id' => ':attribute harus memiliki nilai.',
                'en' => 'The :attribute field must have a value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gt.numeric',
            'text' => [
                'id' => ':attribute harus bernilai lebih besar dari :value.',
                'en' => 'The :attribute must be greater than :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gt.file',
            'text' => [
                'id' => ':attribute harus berukuran lebih besar dari :value kilobita.',
                'en' => 'The :attribute must be greater than :value kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gt.string',
            'text' => [
                'id' => ':attribute harus berisi lebih besar dari :value karakter.',
                'en' => 'The :attribute must be greater than :value characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gt.array',
            'text' => [
                'id' => ':attribute harus memiliki lebih dari :value anggota.',
                'en' => 'The :attribute must have more than :value items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gte.numeric',
            'text' => [
                'id' => ':attribute harus bernilai lebih besar dari atau sama dengan :value.',
                'en' => 'The :attribute must be greater than or equal to :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gte.file',
            'text' => [
                'id' => ':attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
                'en' => 'The :attribute must be greater than or equal to :value kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gte.string',
            'text' => [
                'id' => ':attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
                'en' => 'The :attribute must be greater than or equal to :value characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'gte.array',
            'text' => [
                'id' => ':attribute harus terdiri dari :value anggota atau lebih.',
                'en' => 'The :attribute must have :value items or more.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'image',
            'text' => [
                'id' => ':attribute harus berupa gambar.',
                'en' => 'The :attribute must be an image.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'in',
            'text' => [
                'id' => ':attribute yang dipilih tidak valid.',
                'en' => 'The selected :attribute is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'in_array',
            'text' => [
                'id' => ':attribute tidak ada di dalam :other.',
                'en' => 'The :attribute field does not exist in :other.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'integer',
            'text' => [
                'id' => ':attribute harus berupa bilangan bulat.',
                'en' => 'The :attribute must be an integer.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'ip',
            'text' => [
                'id' => ':attribute harus berupa alamat IP yang valid.',
                'en' => 'The :attribute must be a valid IP address.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'ipv4',
            'text' => [
                'id' => ':attribute harus berupa alamat IPv4 yang valid.',
                'en' => 'The :attribute must be a valid IPv4 address.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'ipv6',
            'text' => [
                'id' => ':attribute harus berupa alamat IPv6 yang valid.',
                'en' => 'The :attribute must be a valid IPv6 address.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'json',
            'text' => [
                'id' => ':attribute harus berupa JSON string yang valid.',
                'en' => 'The :attribute must be a valid JSON string.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lt.numeric',
            'text' => [
                'id' => ':attribute harus bernilai kurang dari :value.',
                'en' => 'The :attribute must be less than :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lt.file',
            'text' => [
                'id' => ':attribute harus berukuran kurang dari :value kilobita.',
                'en' => 'The :attribute must be less than :value kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lt.string',
            'text' => [
                'id' => ':attribute harus berisi kurang dari :value karakter.',
                'en' => 'The :attribute must be less than :value characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lt.array',
            'text' => [
                'id' => ':attribute harus memiliki kurang dari :value anggota.',
                'en' => 'The :attribute must have less than :value items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lte.numeric',
            'text' => [
                'id' => ':attribute harus bernilai kurang dari atau sama dengan :value.',
                'en' => 'The :attribute must be less than or equal to :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lte.file',
            'text' => [
                'id' => ':attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
                'en' => 'The :attribute must be less than or equal to :value kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lte.string',
            'text' => [
                'id' => ':attribute harus berisi kurang dari atau sama dengan :value karakter.',
                'en' => 'The :attribute must be less than or equal to :value characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'lte.array',
            'text' => [
                'id' => ':attribute harus tidak lebih dari :value anggota.',
                'en' => 'The :attribute must not have more than :value items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'mac_address',
            'text' => [
                'id' => ':attribute harus berupa alamat MAC yang valid.',
                'en' => 'The :attribute must be a valid MAC address.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'max.numeric',
            'text' => [
                'id' => ':attribute maskimal bernilai :max.',
                'en' => 'The :attribute must not be greater than :max.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'max.file',
            'text' => [
                'id' => ':attribute maksimal berukuran :max kilobita.',
                'en' => 'The :attribute must not be greater than :max kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'max.string',
            'text' => [
                'id' => ':attribute maskimal berisi :max karakter.',
                'en' => 'The :attribute must not be greater than :max characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'max.array',
            'text' => [
                'id' => ':attribute maksimal terdiri dari :max anggota.',
                'en' => 'The :attribute must not have more than :max items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'mimes',
            'text' => [
                'id' => ':attribute harus berupa berkas berjenis: :values.',
                'en' => 'The :attribute must be a file of type: :values.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'mimetypes',
            'text' => [
                'id' => ':attribute harus berupa berkas berjenis: :values.',
                'en' => 'The :attribute must be a file of type: :values.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'min.numeric',
            'text' => [
                'id' => ':attribute minimal bernilai :min.',
                'en' => 'The :attribute must be at least :min.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'min.file',
            'text' => [
                'id' => ':attribute minimal berukuran :min kilobita.',
                'en' => 'The :attribute must be at least :min kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'min.string',
            'text' => [
                'id' => ':attribute minimal berisi :min karakter.',
                'en' => 'The :attribute must be at least :min characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'min.array',
            'text' => [
                'id' => ':attribute minimal terdiri dari :min anggota.',
                'en' => 'The :attribute must have at least :min items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'multiple_of',
            'text' => [
                'id' => ':attribute harus kelipatan dari :value.',
                'en' => 'The :attribute must be a multiple of :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'not_in',
            'text' => [
                'id' => ':attribute yang dipilih tidak valid.',
                'en' => 'The selected :attribute is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'not_regex',
            'text' => [
                'id' => 'Format :attribute tidak valid.',
                'en' => 'The :attribute format is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'numeric',
            'text' => [
                'id' => ':attribute harus berupa angka.',
                'en' => 'The :attribute must be a number.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'password',
            'text' => [
                'id' => 'Kata sandi salah.',
                'en' => 'The password is incorrect.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'present',
            'text' => [
                'id' => ':attribute wajib ada.',
                'en' => 'The :attribute field must be present.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'regex',
            'text' => [
                'id' => 'Format :attribute tidak valid.',
                'en' => 'The :attribute format is invalid.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required',
            'text' => [
                'id' => ':attribute wajib diisi.',
                'en' => 'The :attribute field is required.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_if',
            'text' => [
                'id' => ':attribute wajib diisi bila :other adalah :value.',
                'en' => 'The :attribute field is required when :other is :value.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_unless',
            'text' => [
                'id' => ':attribute wajib diisi kecuali :other memiliki nilai :values.',
                'en' => 'The :attribute field is required unless :other is in :values.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_with',
            'text' => [
                'id' => ':attribute wajib diisi bila terdapat :values.',
                'en' => 'The :attribute field is required when :values is present.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_with_all',
            'text' => [
                'id' => ':attribute wajib diisi bila terdapat :values.',
                'en' => 'The :attribute field is required when :values are present.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_without',
            'text' => [
                'id' => ':attribute wajib diisi bila tidak terdapat :values.',
                'en' => 'The :attribute field is required when :values is not present.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'required_without_all',
            'text' => [
                'id' => ':attribute wajib diisi bila sama sekali tidak terdapat :values.',
                'en' => 'The :attribute field is required when none of :values are present.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'same',
            'text' => [
                'id' => ':attribute dan :other harus sama.',
                'en' => 'The :attribute and :other must match.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'size.numeric',
            'text' => [
                'id' => ':attribute harus berukuran :size.',
                'en' => 'The :attribute must be :size.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'size.file',
            'text' => [
                'id' => ':attribute harus berukuran :size kilobyte.',
                'en' => 'The :attribute must be :size kilobytes.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'size.string',
            'text' => [
                'id' => ':attribute harus berukuran :size karakter.',
                'en' => 'The :attribute must be :size characters.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'size.array',
            'text' => [
                'id' => ':attribute harus mengandung :size anggota.',
                'en' => 'The :attribute must contain :size items.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'starts_with',
            'text' => [
                'id' => ':attribute harus diawali salah satu dari berikut: :values.',
                'en' => 'The :attribute must start with one of the following: :values.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'string',
            'text' => [
                'id' => ':attribute harus berupa string.',
                'en' => 'The :attribute must be a string.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'timezone',
            'text' => [
                'id' => ':attribute harus berisi zona waktu yang valid.',
                'en' => 'The :attribute must be a valid timezone.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'unique',
            'text' => [
                'id' => ':attribute sudah ada sebelumnya.',
                'en' => 'The :attribute has already been taken.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'uploaded',
            'text' => [
                'id' => ':attribute gagal diunggah.',
                'en' => 'The :attribute failed to upload.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'url',
            'text' => [
                'id' => 'Format :attribute tidak valid.',
                'en' => 'The :attribute must be a valid URL.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'uuid',
            'text' => [
                'id' => ':attribute harus merupakan UUID yang valid.',
                'en' => 'The :attribute must be a valid UUID.'
            ]
        ],
        [
            'group' => 'validation',
            'key' => 'custom.attribute-name.rule-name',
            'text' => [
                'id' => 'pesan-khusus.',
                'en' => 'custom-message.'
            ]
        ],
        [
            'group' => 'popover',
            'key' => 'view',
            'text' => [
                'id' => 'Lihat',
                'en' => 'View'
            ]
        ],
        [
            'group' => 'popover',
            'key' => 'edit',
            'text' => [
                'id' => 'Ubah',
                'en' => 'Edit'
            ]
        ],
        [
            'group' => 'popover',
            'key' => 'delete',
            'text' => [
                'id' => 'Hapus',
                'en' => 'Delete'
            ]
        ],
        [
            'group' => 'popover',
            'key' => 'empty.action',
            'text' => [
                'id' => 'Tidak ada aksi yang tersedia',
                'en' => 'No action available'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.welcome',
            'text' => [
                'id' => 'Selamat Datang!',
                'en' => 'Welcome Back!'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.button.submit',
            'text' => [
                'id' => 'Masuk',
                'en' => 'Sign In'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.input.email',
            'text' => [
                'id' => 'Alamat Surel',
                'en' => 'Email Address'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.input.password',
            'text' => [
                'id' => 'Kata Sandi',
                'en' => 'Password'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.alert.locked_out',
            'text' => [
                'id' => 'Terkunci selama :time detik',
                'en' => 'Locked out for :time second(s)'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'login.alert.lock_warning',
            'text' => [
                'id' => 'Kamu memiliki :attempt percobaan sebelum kamu terkunci',
                'en' => 'You have :attempt attempt(s) left before you are locked out'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.title',
            'text' => [
                'id' => 'Riwayat Aktivitas',
                'en' => 'Activity Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.description',
            'text' => [
                'id' => 'Pilih log yang ingin Anda lihat',
                'en' => 'Choose which log you want to see'
                ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.button',
            'text' => [
                'id' => 'Lihat Log',
                'en' => 'View Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.auth.title',
            'text' => [
                'id' => 'Aktivitas Otentikasi',
                'en' => 'Authentication Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.auth.description',
            'text' => [
                'id' => 'Lihat semua log otentikasi, termasuk masuk dan keluar',
                'en' => 'See all authentication logs, including login and logout'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.model.title',
            'text' => [
                'id' => 'Log Model',
                'en' => 'Model Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.model.description',
            'text' => [
                'id' => 'Lihat semua log model, termasuk pembuatan, pembaruan, dan penghapusan',
                'en' => 'See all model logs, including create, update, and delete'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.system.title',
            'text' => [
                'id' => 'Log Sistem',
                'en' => 'System Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.system.description',
            'text' => [
                'id' => 'Lihat semua log sistem, termasuk log harian untuk melihat kesalahan dan info',
                'en' => 'See all system logs, including daily log for see any error and info'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.query.title',
            'text' => [
                'id' => 'Log Query',
                'en' => 'Query Log'
            ]
        ],
        [
            'group' => 'page',
            'key' => 'log.home.query.description',
            'text' => [
                'id' => 'Lihat semua log query, termasuk query yang dijalankan oleh aplikasi',
                'en' => 'See all query logs, including query that run by application'
            ]
        ],
    ],
];
