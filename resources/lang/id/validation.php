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

        'accepted' => 'Atribut :attribute harus diterima.',
        'active_url' => ' :attribute bukan URL yang valid.',
        'after' => ' :attribute harus berupa tanggal setelah :date.',
        'after_or_equal' => ' :attribute harus berupa tanggal setelah atau sama dengan :date.',
        'alpha' => 'Atribut :attribute hanya boleh berisi huruf.',
        'alpha_dash' => ' :Attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
        'alpha_num' => ' :Attribute hanya boleh berisi huruf dan angka.',
        'array' => ' :attribute harus berupa array.',
        'before' => ' :attribute harus berupa tanggal sebelum :date.',
        'before_or_equal' => ' :Attribute harus berupa tanggal sebelum atau sama dengan :date.',
        'antara' => [
            'numeric' => 'Atribut :attribute harus berada di antara :min dan :max.',
            'file' => ' :Attribute harus antara :min dan :max kilobyte.',
            'string' => ':Attribute harus berada di antara karakter :min dan :max.',
            'array' => ' :attribute harus berada di antara item :min dan :max.',
        ],
        'boolean' => 'Bidang :attribute harus benar atau salah.',
        'confirmed' => 'Konfirmasi :attribute tidak cocok.',
        'date' => ':atribut bukan tanggal yang valid.',
        'date_equals' => ' :attribute harus berupa tanggal yang sama dengan :date.',
        'date_format' => ' :Attribute tidak cocok dengan format :format.',
        'different' => ' :attribute dan :other harus berbeda.',
        'digits' => ' :Attribute harus berupa :digits digit.',
        'digits_between' => 'Atribut :attribute harus berada di antara angka :min dan :max.',
        'dimensions' => ' :Attribute memiliki dimensi gambar yang tidak valid.',
        'distinct' => 'Bidang :attribute mempunyai nilai duplikat.',
        'email' => ':attribute harus berupa alamat email yang valid.',
        'ends_with' => ' :Attribute harus diakhiri dengan salah satu dari yang berikut: :values.',
        'exists' => ' :Attribute yang dipilih tidak valid.',
        'file' => ' :attribute harus berupa file.',
        'filled' => 'Kolom :attribute harus mempunyai nilai.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'attributes' => [],

];
