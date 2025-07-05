<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':attribute alanı, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı, :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı, :date tarihinden sonra veya eşit olmalıdır.',
    'alpha' => ':attribute alanı sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute alanı sadece harfler, rakamlar, tire ve alt çizgiler içerebilir.',
    'alpha_num' => ':attribute alanı sadece harfler ve rakamlardan oluşmalıdır.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı sadece tek baytlık alfasayısal karakterler ve semboller içerebilir.',
    'before' => ':attribute alanı, :date tarihinden önce bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı, :date tarihinden önce veya eşit olmalıdır.',
    'between' => [
        'array' => ':attribute alanı :min ve :max öğe arasında olmalıdır.',
        'file' => ':attribute alanı :min ve :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute alanı :min ve :max arasında olmalıdır.',
        'string' => ':attribute alanı :min ve :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru ya da yanlış olmalıdır.',
    'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute alanı onayıyla eşleşmiyor.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı, :date tarihiyle eşit olmalıdır.',
    'date_format' => ':attribute alanı :format formatıyla eşleşmelidir.',
    'decimal' => ':attribute alanı :decimal ondalık basamağa sahip olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':attribute alanı, :other :value olduğunda reddedilmelidir.',
    'different' => ':attribute alanı ve :other farklı olmalıdır.',
    'digits' => ':attribute alanı :digits haneli olmalıdır.',
    'digits_between' => ':attribute alanı :min ve :max hane arasında olmalıdır.',
    'dimensions' => ':attribute alanının geçersiz resim boyutları vardır.',
    'distinct' => ':attribute alanında bir tekrar değeri bulunmaktadır.',
    'doesnt_end_with' => ':attribute alanı şu değerlerle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı şu değerlerle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı şu değerlerle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersizdir.',
    'exists' => 'Seçilen :attribute geçersizdir.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
        'array' => ':attribute alanı, :value öğesinden fazla öğeye sahip olmalıdır.',
        'file' => ':attribute alanı, :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute alanı, :value sayısından büyük olmalıdır.',
        'string' => ':attribute alanı, :value karakterden fazla olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı, :value öğe veya daha fazla öğeye sahip olmalıdır.',
        'file' => ':attribute alanı, :value kilobayttan büyük veya eşit olmalıdır.',
        'numeric' => ':attribute alanı, :value sayısından büyük veya eşit olmalıdır.',
        'string' => ':attribute alanı, :value karakterden büyük veya eşit olmalıdır.',
    ],
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersizdir.',
    'in_array' => ':attribute alanı :other içinde mevcut olmalıdır.',
    'integer' => ':attribute alanı bir tam sayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizisi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harf olmalıdır.',
    'lt' => [
        'array' => ':attribute alanı, :value öğesinden az öğeye sahip olmalıdır.',
        'file' => ':attribute alanı, :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute alanı, :value sayısından küçük olmalıdır.',
        'string' => ':attribute alanı, :value karakterden az olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı, :value öğeden fazla öğe içermemelidir.',
        'file' => ':attribute alanı, :value kilobayttan küçük veya eşit olmalıdır.',
        'numeric' => ':attribute alanı, :value sayısından küçük veya eşit olmalıdır.',
        'string' => ':attribute alanı, :value karakterden küçük veya eşit olmalıdır.',
    ],
    'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute alanı, :max öğeden fazla öğe içermemelidir.',
        'file' => ':attribute alanı, :max kilobayttan büyük olmamalıdır.',
        'numeric' => ':attribute alanı, :max sayısından büyük olmamalıdır.',
        'string' => ':attribute alanı, :max karakterden fazla olmamalıdır.',
    ],
    'max_digits' => ':attribute alanı, :max haneli olmalıdır.',
    'mimes' => ':attribute alanı şu dosya türlerinden biri olmalıdır: :values.',
    'mimetypes' => ':attribute alanı şu dosya türlerinden biri olmalıdır: :values.',
    'min' => [
        'array' => ':attribute alanı, en az :min öğeye sahip olmalıdır.',
        'file' => ':attribute alanı, en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute alanı, en az :min olmalıdır.',
        'string' => ':attribute alanı, en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute alanı, en az :min haneli olmalıdır.',
    'missing' => ':attribute alanı eksik olmalıdır.',
    'missing_if' => ':attribute alanı, :other :value olduğunda eksik olmalıdır.',
    'missing_unless' => ':attribute alanı, :other :value olmadığı sürece eksik olmalıdır.',
    'missing_with' => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'missing_with_all' => ':attribute alanı, :values mevcut olduğunda eksik olmalıdır.',
    'multiple_of' => ':attribute alanı, :value’nın bir katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersizdir.',
    'not_regex' => ':attribute alanı formatı geçersizdir.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
        'letters' => 'Trường :attribute phải chứa ít nhất một chữ cái.',
        'mixed' => 'Trường :attribute phải chứa ít nhất một chữ hoa và một chữ thường.',
        'numbers' => 'Trường :attribute phải chứa ít nhất một số.',
        'symbols' => 'Trường :attribute phải chứa ít nhất một ký tự đặc biệt.',
        'uncompromised' => ':attribute đã xuất hiện trong một vụ rò rỉ dữ liệu. Vui lòng chọn :attribute khác.',
    ],
    'present' => 'Trường :attribute phải có mặt.',
    'prohibited' => 'Trường :attribute bị cấm.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other có trong :values.',
    'prohibits' => 'Trường :attribute cấm :other xuất hiện.',
    'regex' => 'Định dạng của trường :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_array_keys' => 'Trường :attribute phải chứa các mục cho: :values.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_if_accepted' => 'Trường :attribute là bắt buộc khi :other được chấp nhận.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other có trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi :values có mặt.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi tất cả :values có mặt.',
    'required_without' => 'Trường :attribute là bắt buộc khi :values không có mặt.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values nào có mặt.',
    'same' => 'Trường :attribute phải khớp với :other.',
    'size' => [
        'array' => 'Trường :attribute phải chứa :size mục.',
        'file' => 'Trường :attribute phải có kích thước :size kilobytes.',
        'numeric' => 'Trường :attribute phải là :size.',
        'string' => 'Trường :attribute phải có độ dài :size ký tự.',
    ],
    'starts_with' => 'Trường :attribute phải bắt đầu với một trong những giá trị sau: :values.',
    'string' => 'Trường :attribute phải là chuỗi.',
    'timezone' => 'Trường :attribute phải là một múi giờ hợp lệ.',
    'unique' => ':attribute đã được sử dụng.',
    'uploaded' => 'Trường :attribute không thể tải lên.',
    'uppercase' => 'Trường :attribute phải viết hoa.',
    'url' => 'Trường :attribute phải là một URL hợp lệ.',
    'ulid' => 'Trường :attribute phải là một ULID hợp lệ.',
    'uuid' => 'Trường :attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'địa chỉ email',
        'phone' => 'số điện thoại',
    ],

];
