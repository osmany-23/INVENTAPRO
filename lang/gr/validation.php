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

    'accepted' => 'Das Feld :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das Feld :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das Feld :attribute muss eine gültige URL sein.',
    'after' => 'Das Feld :attribute muss ein Datum nach :date sein.',
    'after_or_equal' => 'Das Feld :attribute muss ein Datum nach oder gleich :date sein.',
    'alpha' => 'Das Feld :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das Feld :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das Feld :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das Feld :attribute muss ein Array sein.',
    'ascii' => 'Das Feld :attribute darf nur einbyteige alphanumerische Zeichen und Symbole enthalten.',
    'before' => 'Das Feld :attribute muss ein Datum vor :date sein.',
    'before_or_equal' => 'Das Feld :attribute muss ein Datum vor oder gleich :date sein.',
    'between' => [
        'array' => 'Das Feld :attribute muss zwischen :min und :max Elemente enthalten.',
        'file' => 'Das Feld :attribute muss zwischen :min und :max Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss zwischen :min und :max liegen.',
        'string' => 'Das Feld :attribute muss zwischen :min und :max Zeichen enthalten.',
    ],
    'boolean' => 'Das Feld :attribute muss wahr oder falsch sein.',
    'can' => 'Das Feld :attribute enthält einen nicht autorisierten Wert.',
    'confirmed' => 'Die Bestätigung des Feldes :attribute stimmt nicht überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das Feld :attribute muss ein gültiges Datum sein.',
    'date_equals' => 'Das Feld :attribute muss ein Datum sein, das gleich :date ist.',
    'date_format' => 'Das Feld :attribute muss dem Format :format entsprechen.',
    'decimal' => 'Das Feld :attribute muss :decimal Dezimalstellen haben.',
    'declined' => 'Das Feld :attribute muss abgelehnt werden.',
    'declined_if' => 'Das Feld :attribute muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Das Feld :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das Feld :attribute muss :digits Ziffern enthalten.',
    'digits_between' => 'Das Feld :attribute muss zwischen :min und :max Ziffern enthalten.',
    'dimensions' => 'Das Feld :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das Feld :attribute enthält einen doppelten Wert.',
    'doesnt_end_with' => 'Das Feld :attribute darf nicht mit einem der folgenden Enden: :values.',
    'doesnt_start_with' => 'Das Feld :attribute darf nicht mit einem der folgenden beginnen: :values.',
    'email' => 'Das Feld :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das Feld :attribute muss mit einem der folgenden Enden: :values.',
    'enum' => 'Die ausgewählte :attribute ist ungültig.',
    'exists' => 'Die ausgewählte :attribute ist ungültig.',
    'file' => 'Das Feld :attribute muss eine Datei sein.',
    'filled' => 'Das Feld :attribute muss einen Wert haben.',
    'gt' => [
        'array' => 'Das Feld :attribute muss mehr als :value Elemente enthalten.',
        'file' => 'Das Feld :attribute muss mehr als :value Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss größer als :value sein.',
        'string' => 'Das Feld :attribute muss mehr als :value Zeichen enthalten.',
    ],
    'gte' => [
        'array' => 'Das Feld :attribute muss mindestens :value Elemente enthalten.',
        'file' => 'Das Feld :attribute muss mindestens :value Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss größer oder gleich :value sein.',
        'string' => 'Das Feld :attribute muss mindestens :value Zeichen enthalten.',
    ],
    'image' => 'Das Feld :attribute muss ein Bild sein.',
    'in' => 'Die ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das Feld :attribute muss in :other existieren.',
    'integer' => 'Das Feld :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das Feld :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das Feld :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das Feld :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das Feld :attribute muss ein gültiger JSON-String sein.',
    'lowercase' => 'Das Feld :attribute muss in Kleinbuchstaben sein.',
    'lt' => [
        'array' => 'Das Feld :attribute muss weniger als :value Elemente enthalten.',
        'file' => 'Das Feld :attribute muss weniger als :value Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss kleiner als :value sein.',
        'string' => 'Das Feld :attribute muss weniger als :value Zeichen enthalten.',
    ],
    'lte' => [
        'array' => 'Das Feld :attribute darf nicht mehr als :value Elemente enthalten.',
        'file' => 'Das Feld :attribute darf nicht größer als :value Kilobyte sein.',
        'numeric' => 'Das Feld :attribute darf nicht größer als :value sein.',
        'string' => 'Das Feld :attribute darf nicht mehr als :value Zeichen enthalten.',
    ],
    'mac_address' => 'Das Feld :attribute muss eine gültige MAC-Adresse sein.',
    'max' => [
        'array' => 'Das Feld :attribute darf nicht mehr als :max Elemente enthalten.',
        'file' => 'Das Feld :attribute darf nicht größer als :max Kilobyte sein.',
        'numeric' => 'Das Feld :attribute darf nicht größer als :max sein.',
        'string' => 'Das Feld :attribute darf nicht mehr als :max Zeichen enthalten.',
    ],
    'max_digits' => 'Das Feld :attribute darf nicht mehr als :max Ziffern enthalten.',
    'mimes' => 'Das Feld :attribute muss eine Datei vom Typ: :values sein.',
    'mimetypes' => 'Das Feld :attribute muss eine Datei vom Typ: :values sein.',
    'min' => [
        'array' => 'Das Feld :attribute muss mindestens :min Elemente enthalten.',
        'file' => 'Das Feld :attribute muss mindestens :min Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss mindestens :min sein.',
        'string' => 'Das Feld :attribute muss mindestens :min Zeichen enthalten.',
    ],
    'min_digits' => 'Das Feld :attribute muss mindestens :min Ziffern enthalten.',
    'missing' => 'Das Feld :attribute muss fehlen.',
    'missing_if' => 'Das Feld :attribute muss fehlen, wenn :other :value ist.',
    'missing_unless' => 'Das Feld :attribute muss fehlen, es sei denn :other ist :value.',
    'missing_with' => 'Das Feld :attribute muss fehlen, wenn :values vorhanden ist.',
    'missing_with_all' => 'Das Feld :attribute muss fehlen, wenn :values vorhanden sind.',
    'multiple_of' => 'Das Feld :attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Die ausgewählte :attribute ist ungültig.',
    'not_regex' => 'Das Format des Feldes :attribute ist ungültig.',
    'numeric' => 'Das Feld :attribute muss eine Zahl sein.',
    'password' => [
        'letters' => 'Das :attribute-Feld muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das :attribute-Feld muss mindestens einen Großbuchstaben und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das :attribute-Feld muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das :attribute-Feld muss mindestens ein Symbol enthalten.',
        'uncompromised' => 'Das angegebene :attribute ist in einem Datenleck aufgetaucht. Bitte wählen Sie ein anderes :attribute.',
    ],
    'present' => 'Das :attribute-Feld muss vorhanden sein.',
    'prohibited' => 'Das :attribute-Feld ist verboten.',
    'prohibited_if' => 'Das :attribute-Feld ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das :attribute-Feld ist verboten, es sei denn, :other ist in :values.',
    'prohibits' => 'Das :attribute-Feld verbietet es, dass :other vorhanden ist.',
    'regex' => 'Das :attribute-Feld hat ein ungültiges Format.',
    'required' => 'Das :attribute-Feld ist erforderlich.',
    'required_array_keys' => 'Das :attribute-Feld muss Einträge für :values enthalten.',
    'required_if' => 'Das :attribute-Feld ist erforderlich, wenn :other :value ist.',
    'required_if_accepted' => 'Das :attribute-Feld ist erforderlich, wenn :other akzeptiert wird.',
    'required_unless' => 'Das :attribute-Feld ist erforderlich, es sei denn, :other ist in :values.',
    'required_with' => 'Das :attribute-Feld ist erforderlich, wenn :values vorhanden sind.',
    'required_with_all' => 'Das :attribute-Feld ist erforderlich, wenn :values vorhanden sind.',
    'required_without' => 'Das :attribute-Feld ist erforderlich, wenn :values nicht vorhanden sind.',
    'required_without_all' => 'Das :attribute-Feld ist erforderlich, wenn keines der :values vorhanden ist.',
    'same' => 'Das :attribute-Feld muss mit :other übereinstimmen.',
    'size' => [
        'array' => 'Das :attribute-Feld muss :size Elemente enthalten.',
        'file' => 'Das :attribute-Feld muss :size Kilobyte groß sein.',
        'numeric' => 'Das :attribute-Feld muss :size sein.',
        'string' => 'Das :attribute-Feld muss :size Zeichen lang sein.',
    ],
    'starts_with' => 'Das :attribute-Feld muss mit einem der folgenden beginnen: :values.',
    'string' => 'Das :attribute-Feld muss eine Zeichenkette sein.',
    'timezone' => 'Das :attribute-Feld muss eine gültige Zeitzone sein.',
    'unique' => 'Das :attribute wurde bereits vergeben.',
    'uploaded' => 'Das :attribute konnte nicht hochgeladen werden.',
    'uppercase' => 'Das :attribute-Feld muss in Großbuchstaben sein.',
    'url' => 'Das :attribute-Feld muss eine gültige URL sein.',
    'ulid' => 'Das :attribute-Feld muss eine gültige ULID sein.',
    'uuid' => 'Das :attribute-Feld muss eine gültige UUID sein.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Hier können benutzerdefinierte Validierungsnachrichten für Attribute festgelegt werden,
    | indem die Konvention "attribute.rule" verwendet wird. Dies erleichtert es,
    | eine spezifische benutzerdefinierte Nachricht für eine bestimmte Regel festzulegen.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'benutzerdefinierte-nachricht',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen werden verwendet, um unseren Attribut-Platzhalter
    | durch etwas Ausdrücklicheres zu ersetzen, wie "E-Mail-Adresse" anstelle von "email".
    | Dies hilft uns, die Nachricht verständlicher zu machen.
    |
    */

    'attributes' => [
        'email' => 'E-Mail',
        'phone' => 'Telefon',
    ],

];
