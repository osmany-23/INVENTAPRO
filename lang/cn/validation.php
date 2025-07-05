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

    'accepted' => '這 :attribute 必須接受..',
    'accepted_if' => '當 :other 是 :value 時，必須接受 :attribute 欄位。',
    'active_url' => '這 :attribute 不是有效的 URL.',
    'after' => '這 :attribute 必須是 :date 之後的日期.',
    'after_or_equal' => '這 :attribute 必須是 :date 之後或等於的日期.',
    'alpha' => '這 :attribute 只能包含字母.',
    'alpha_dash' => '這 :attribute 只能包含字母、數字、破折號和下劃線.',
    'alpha_num' => '這 :attribute 只能包含字母和數字.',
    'array' => '這attribute 必須是一個數組.',
    'ascii' => ':attribute 欄位只能包含單字節的字母、數字和符號。',
    'before' => '這 :attribute 必須是 :date 之前的日期.',
    'before_or_equal' => '這 :attribute 必須是早於或等於 :date 的日期.',
    'between' => [
        'array' => '這 :attribute 必須在 :min 和 :max 之間的項目.',
        'file' => '這 :attribute 必須介於 :min 和 :max 千字節之間.',
        'numeric' => '這 :attribute 必須介於 :min 和 :max 之間。',
        'string' => '這 :attribute 必須介於 :min 和 :max 字符之間.',
    ],
    'boolean' => '這 :attribute 字段必須為真或假.',
    'can' => ':attribute 欄位包含未授權的值。',
    'confirmed' => '這 :attribute 確認不匹配.',
    'current_password' => '密碼不正確.',
    'date' => '這 :attribute 不是有效日期.',
    'date_equals' => '這 :attribute 必須是等於 :date 的日期.',
    'date_format' => '這 :attribute 與格式不匹配 :format.',
    'decimal' => ':attribute 欄位必須有 :decimal 位小數。',
    'declined' => ':attribute 欄位必須被拒絕。',
    'declined_if' => '當 :other 是 :value 時，:attribute 欄位必須被拒絕。',
    'different' => '這 :attribute 和 :other 必須不同.',
    'digits' => '這 :attribute 必須是 :digits 數字.',
    'digits_between' => '這 :attribute 必須介於 :min 和 :max 數字之間.',
    'dimensions' => '這 :attribute 圖片尺寸無效.',
    'distinct' => '這 :attribute 字段具有重複值.',
    'doesnt_end_with' => ':attribute 欄位不能以以下任一值結尾：:values。',
    'doesnt_start_with' => ':attribute 欄位不能以以下任一值開頭：:values。',
    'email' => '這 :attribute 必須是一個有效的E-mail地址.',
    'ends_with' => '這 :attribute 必須以下列之一結尾: :values.',
    'enum' => '所選的 :attribute 無效。',
    'exists' => '這 選擇 :attribute 是無效的.',
    'file' => '這 :attribute 必須是文件.',
    'filled' => '這 :attribute 字段必須有值.',
    'gt' => [
        'numeric' => '這 :attribute 必須大於 :value.',
        'file' => '這 :attribute 必須大於 :value 千字節.',
        'string' => '這 :attribute 必須大於 :value 字符。',
        'array' => '這 :attribute 必須有超過 :value 項.',
    ],
    'gte' => [
        'numeric' => '這 :attribute 必須大於或等於 :value。',
        'file' => '這 :attribute 必須大於或等於 :value 千字節。',
        'string' => '這 :attribute 必須大於或等於 :value 字符.',
        'array' => '這 :attribute 必須有 :value 項或更多.',
    ],
    'image' => '這 :attribute 必須是圖像.',
    'in' => '這 選擇 :attribute 是無效的.',
    'in_array' => '這 :attribute 字段不存在於 :other.',
    'integer' => '這 :attribute 必須是整數.',
    'ip' => '這 :attribute 必須是有效的 IP 地址.',
    'ipv4' => '這 :attribute 必須是有效的 IPv4 地址.',
    'ipv6' => '這 :attribute 必須是有效的 IPv6 地址.',
    'json' => '這 :attribute 必須是有效的 JSON 字符串.',
    'lowercase' => '該 :attribute 欄位必須為小寫。',
    'lt' => [
        'numeric' => '這 :attribute 必須小於 :value.',
        'file' => '這 :attribute 必須小於 :value 千字節.',
        'string' => '這 :attribute 必須小於 :value 個字符.',
        'array' => '這 :attribute 必須少於 :value 項.',
    ],
    'lte' => [
        'numeric' => '這 :attribute 必須小於或等於 :value.',
        'file' => '這 :attribute 必須小於或等於 :value 千字節.',
        'string' => '這 :attribute 必須小於或等於 :value 個字符.',
        'array' => '這 :attribute 不得超過 :value 項.',
    ],
    'mac_address' => '該 :attribute 欄位必須是一個有效的 MAC 地址。',
    'max' => [
        'numeric' => '這 :attribute 不得大於 :max.',
        'file' => '這 :attribute 不得大於 :max 千字節.',
        'string' => '這 :attribute 不得大於 :max 個字符.',
        'array' => '這 :attribute 不得超過 :max 個項目.',
    ],
    'max_digits' => '該 :attribute 欄位的數字不得超過 :max 位。',
    'mimes' => '這 :attribute 必須是文件類型: :values.',
    'mimetypes' => '這 :attribute 必須是文件類型: :values.',
    'min' => [
        'numeric' => '這 :attribute 必須至少為 :min.',
        'file' => '這 :attribute 必須至少為 :min 千字節.',
        'string' => '這 :attribute 必須至少為 :min 個字符.',
        'array' => '這 :attribute 必須至少有 :min 個項目.',
    ],
    'min_digits' => '該 :attribute 欄位的數字不得少於 :min 位。',
    'missing' => '該 :attribute 欄位必須不存在。',
    'missing_if' => '當 :other 為 :value 時，該 :attribute 欄位必須不存在。',
    'missing_unless' => '除非 :other 為 :value，否則該 :attribute 欄位必須不存在。',
    'missing_with' => '當 :values 存在時，該 :attribute 欄位必須不存在。',
    'missing_with_all' => '當 :values 都存在時，該 :attribute 欄位必須不存在。',
    'multiple_of' => '這 :attribute 必須是 :value 的倍數.',
    'not_in' => '這 選擇 :attribute 是無效的.',
    'not_regex' => '這 :attribute 格式無效.',
    'numeric' => '這 :attribute 必須是數字.',
    'password' => [
        'letters' => '該 :attribute 欄位必須包含至少一個字母。',
        'mixed' => '該 :attribute 欄位必須同時包含至少一個大寫字母和一個小寫字母。',
        'numbers' => '該 :attribute 欄位必須包含至少一個數字。',
        'symbols' => '該 :attribute 欄位必須包含至少一個符號。',
        'uncompromised' => '提供的 :attribute 曾出現在資料洩漏中。請選擇不同的 :attribute。',
    ],
    'present' => '這 :attribute 字段必須存在。',
    'prohibited' => '該 :attribute 欄位被禁止使用。',
    'prohibited_if' => '當 :other 為 :value 時，該 :attribute 欄位被禁止使用。',
    'prohibited_unless' => '除非 :other 在 :values 中，否則該 :attribute 欄位被禁止使用。',
    'prohibits' => '該 :attribute 欄位禁止 :other 出現。',
    'regex' => '這 :attribute 格式無效。',
    'required' => '這 :attribute 字段是必需的。',
    'required_array_keys' => '這個 :attribute 欄位必須包含以下項目：:values。',
    'required_if' => '當 :other 是 :value 時，這個 :attribute 欄位是必填的。',
    'required_if_accepted' => '當 :other 被接受時，這個 :attribute 欄位是必填的。',
    'required_unless' => '除非 :other 是 :values 之一，否則這個 :attribute 欄位是必填的。',
    'required_with' => '當 :values 存在時，這個 :attribute 欄位是必填的。',
    'required_with_all' => '當 :values 全部存在時，這個 :attribute 欄位是必填的。',
    'required_without' => '當 :values 不存在時，這個 :attribute 欄位是必填的。',
    'required_without_all' => '當 :values 全部不存在時，這個 :attribute 欄位是必填的。',
    'same' => '這個 :attribute 欄位必須與 :other 相同。',
    'size' => [
        'numeric' => '這 :attribute 必須是：大小.',
        'file' => '這 :attribute 必須是 :size 千字節.',
        'string' => '這 :attribute 必須是 :size 個字符。',
        'array' => '這 :attribute 必須包含 :size 項目.',
    ],
    'starts_with' => '這 :attribute 必須以下列之一開頭： :values.',
    'string' => '這 :attribute 必須是字符串.',
    'timezone' => '這 :attribute 必須是有效的時區.',
    'unique' => '這 :attribute 已有人帶走了.',
    'uploaded' => '這 :attribute 上傳失敗.',
    'uppercase' => '這個 :attribute 欄位必須是大寫的。',
    'url' => '這 :attribute 必須是有效的 URL。',
    'ulid' => '這個 :attribute 欄位必須是有效的 ULID。',
    'uuid' => '這 :attribute 必須是有效的 UUID。',
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
