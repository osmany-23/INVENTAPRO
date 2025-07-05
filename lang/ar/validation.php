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

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'الحقل :attribute يجب أن يكون رابط URL صالح.',
    'after' => 'يجب أن يكون الحقل :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً مساوياً أو بعد :date.',
    'alpha' => 'يجب أن يحتوي الحقل :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي الحقل :attribute على حروف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي الحقل :attribute على حروف وأرقام فقط.',
    'array' => 'يجب أن يكون الحقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي الحقل :attribute على أحرف ورموز أحادية البايت فقط.',
    'before' => 'يجب أن يكون الحقل :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون الحقل :attribute تاريخاً مساوياً أو قبل :date.',
    'between' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على عدد عناصر بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف في الحقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute بين :min و :max.',
        'string' => 'يجب أن يحتوي الحقل :attribute على عدد أحرف بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute صحيحة أو خاطئة.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد الحقل :attribute غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون الحقل :attribute تاريخاً صالحاً.',
        'date_equals' => 'يجب أن يكون الحقل :attribute تاريخاً مساوياً لـ :date.',
        'date_format' => 'يجب أن يطابق الحقل :attribute التنسيق :format.',
        'decimal' => 'يجب أن يحتوي الحقل :attribute على :decimal أرقام عشرية.',
        'declined' => 'يجب رفض الحقل :attribute.',
        'declined_if' => 'يجب رفض الحقل :attribute عندما يكون :other هو :value.',
        'different' => 'يجب أن يكون الحقل :attribute و :other مختلفين.',
        'digits' => 'يجب أن يحتوي الحقل :attribute على :digits رقم.',
        'digits_between' => 'يجب أن يحتوي الحقل :attribute على أرقام بين :min و :max.',
        'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
        'distinct' => 'الحقل :attribute يحتوي على قيمة مكررة.',
        'doesnt_end_with' => 'يجب ألا ينتهي الحقل :attribute بأحد القيم التالية: :values.',
        'doesnt_start_with' => 'يجب ألا يبدأ الحقل :attribute بأحد القيم التالية: :values.',
        'email' => 'يجب أن يكون الحقل :attribute عنوان بريد إلكتروني صالح.',
        'ends_with' => 'يجب أن ينتهي الحقل :attribute بأحد القيم التالية: :values.',
        'enum' => 'القيمة المحددة للحقل :attribute غير صالحة.',
        'exists' => 'القيمة المحددة للحقل :attribute غير صالحة.',
        'file' => 'يجب أن يكون الحقل :attribute ملفًا.',
        'filled' => 'يجب أن يحتوي الحقل :attribute على قيمة.',
        'gt' => [
            'array' => 'يجب أن يحتوي الحقل :attribute على أكثر من :value عنصر.',
            'file' => 'يجب أن يكون الحقل :attribute أكبر من :value كيلوبايت.',
            'numeric' => 'يجب أن يكون الحقل :attribute أكبر من :value.',
            'string' => 'يجب أن يكون الحقل :attribute أكبر من :value حرفًا.',
        ],
        'gte' => [
            'array' => 'يجب أن يحتوي الحقل :attribute على :value عنصرًا أو أكثر.',
            'file' => 'يجب أن يكون الحقل :attribute أكبر من أو يساوي :value كيلوبايت.',
            'numeric' => 'يجب أن يكون الحقل :attribute أكبر من أو يساوي :value.',
            'string' => 'يجب أن يكون الحقل :attribute أكبر من أو يساوي :value حرفًا.',
        ],
        'image' => 'يجب أن يكون الحقل :attribute صورة.',
        'in' => 'القيمة المحددة للحقل :attribute غير صالحة.',
        'in_array' => 'يجب أن يوجد الحقل :attribute في :other.',
        'integer' => 'يجب أن يكون الحقل :attribute عددًا صحيحًا.',
        'ip' => 'يجب أن يكون الحقل :attribute عنوان IP صالحًا.',
        'ipv4' => 'يجب أن يكون الحقل :attribute عنوان IPv4 صالحًا.',
        'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 صالحًا.',
        'json' => 'يجب أن يكون الحقل :attribute نص JSON صالحًا.',
        'lowercase' => 'يجب أن يكون الحقل :attribute بحروف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على أقل من :value عنصرًا.',
        'file' => 'يجب أن يكون حجم الملف :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من :value.',
        'string' => 'يجب أن يحتوي الحقل :attribute على أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب ألا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute أقل من أو تساوي :value.',
        'string' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :value حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون الحقل :attribute عنوان MAC صالحًا.',
    'max' => [
        'array' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max عنصرًا.',
        'file' => 'يجب ألا يزيد حجم الملف :attribute عن :max كيلوبايت.',
        'numeric' => 'يجب ألا تزيد قيمة الحقل :attribute عن :max.',
        'string' => 'يجب ألا يزيد طول الحقل :attribute عن :max حرفًا.',
    ],
    'max_digits' => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max رقمًا.',
    'mimes' => 'يجب أن يكون الحقل :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون الحقل :attribute ملفًا من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :min عنصرًا على الأقل.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute على الأقل :min.',
        'string' => 'يجب أن يحتوي الحقل :attribute على الأقل :min حرفًا.',
    ],
    'min_digits' => 'يجب أن يحتوي الحقل :attribute على الأقل :min رقمًا.',
    'missing' => 'يجب أن يكون الحقل :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقودًا عندما تكون قيمة :other هي :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقودًا ما لم تكن قيمة :other هي :value.',
    'missing_with' => 'يجب أن يكون الحقل :attribute مفقودًا عندما تكون :values موجودة.',
    'missing_with_all' => 'يجب أن يكون الحقل :attribute مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن تكون قيمة الحقل :attribute من مضاعفات :value.',
    'not_in' => 'القيمة المحددة للحقل :attribute غير صالحة.',
    'not_regex' => 'تنسيق الحقل :attribute غير صالح.',
    'numeric' => 'يجب أن يكون الحقل :attribute رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي الحقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي الحقل :attribute على حرف كبير واحد وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي الحقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي الحقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'تم العثور على الحقل :attribute في تسريب بيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present' => 'يجب أن يكون الحقل :attribute موجودًا.',
    'prohibited' => 'الحقل :attribute محظور.',
    'prohibited_if' => 'الحقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless' => 'الحقل :attribute محظور إلا إذا كان :other في :values.',
    'prohibits' => 'الحقل :attribute يمنع وجود :other.',
    'regex' => 'صيغة الحقل :attribute غير صالحة.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي الحقل :attribute على إدخالات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يتم قبول :other.',
    'required_unless' => 'الحقل :attribute مطلوب إلا إذا كان :other في :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما يكون :values موجودًا.',
    'required_with_all' => 'الحقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'الحقل :attribute مطلوب عندما لا تكون :values موجودة.',
    'required_without_all' => 'الحقل :attribute مطلوب عندما لا يكون أي من :values موجودًا.',
    'same' => 'يجب أن يطابق الحقل :attribute :other.',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصرًا.',
        'file' => 'يجب أن يكون حجم الحقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون الحقل :attribute :size.',
        'string' => 'يجب أن يحتوي الحقل :attribute على :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ الحقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصًا.',
    'timezone' => 'يجب أن يكون الحقل :attribute منطقة زمنية صالحة.',
    'unique' => 'الحقل :attribute مأخوذ بالفعل.',
    'uploaded' => 'فشل تحميل الحقل :attribute.',
    'uppercase' => 'يجب أن يكون الحقل :attribute بأحرف كبيرة.',
    'url' => 'يجب أن يكون الحقل :attribute عنوان URL صالحًا.',
    'ulid' => 'يجب أن يكون الحقل :attribute ULID صالحًا.',
    'uuid' => 'يجب أن يكون الحقل :attribute UUID صالحًا.',

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
            'rule-name' => '自定義消息',
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
        'email' => '电子邮件',
        'phone' => '电话',
    ],

];
