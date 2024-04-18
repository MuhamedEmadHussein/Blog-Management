<?php

declare(strict_types=1);

return [
    'accepted'             => 'يجب قبول :attribute.',
    'accepted_if'          => 'يجب قبول :attribute في حالة :other يساوي :value.',
    'active_url'           => 'حقل :attribute لا يُمثّل رابطًا صحيحًا.',
    'after'                => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => 'حقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي حقل :attribute سوى على حروف.',
    'alpha_dash'           => 'يجب أن لا يحتوي حقل :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي حقل :attribute على حروفٍ وأرقامٍ فقط.',
    'array'                => 'يجب أن يكون حقل :attribute ًمصفوفة.',
    'ascii'                => 'يجب أن يحتوي الحقل :attribute فقط على أحرف أبجدية رقمية أحادية البايت ورموز.',
    'before'               => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => 'حقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between'              => [
        'array'   => 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute بين :min و :max.',
        'string'  => 'يجب أن يكون عدد حروف نّص حقل :attribute بين :min و :max.',
    ],
    'boolean'              => 'يجب أن تكون قيمة حقل :attribute إما true أو false .',
    'can'                  => 'الحقل :attribute يحتوي على قيمة غير مصرّح بها.',
    'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'current_password'     => 'كلمة المرور غير صحيحة.',
    'date'                 => 'حقل :attribute ليس تاريخًا صحيحًا.',
    'date_equals'          => 'يجب أن يكون حقل :attribute مطابقاً للتاريخ :date.',
    'date_format'          => 'لا يتوافق حقل :attribute مع الشكل :format.',
    'decimal'              => 'يجب أن يحتوي الحقل :attribute على :decimal منزلة/منازل عشرية.',
    'declined'             => 'يجب رفض :attribute.',
    'declined_if'          => 'يجب رفض :attribute عندما يكون :other بقيمة :value.',
    'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits'               => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام.',
    'digits_between'       => 'يجب أن يحتوي حقل :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions'           => 'الحقل:attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
    'doesnt_end_with'      => 'الحقل :attribute يجب ألّا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with'    => 'الحقل :attribute يجب ألّا يبدأ بأحد القيم التالية: :values.',
    'email'                => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with'            => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values',
    'enum'                 => 'قيمة حقل :attribute غير موجودة في قائمة القيم المسموح بها.',
    'exists'               => 'قيمة الحقل :attribute غير موجودة.',
    'extensions'           => 'يجب أن يحتوي الحقل :attribute على أحد الإمتدادات التالية: :values.',
    'file'                 => 'الحقل :attribute يجب أن يكون ملفا.',
    'filled'               => 'حقل :attribute إجباري.',
    'gt'                   => [
        'array'   => 'يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :value.',
        'string'  => 'يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.',
    ],
    'gte'                  => [
        'array'   => 'يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.',
        'string'  => 'يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.',
    ],
    'hex_color'            => 'يجب أن يحتوي الحقل :attribute على صيغة لون HEX صالحة',
    'image'                => 'يجب أن يكون حقل :attribute صورةً.',
    'in'                   => 'قيمة حقل :attribute غير موجودة في قائمة القيم المسموح بها.',
    'in_array'             => 'حقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip'                   => 'يجب أن يكون حقل :attribute عنوان IP صحيحًا.',
    'ipv4'                 => 'يجب أن يكون حقل :attribute عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون حقل :attribute عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون حقل :attribute نصًا من نوع JSON.',
    'list'                 => 'يجب أن يكون حقل :attribute قائمة.',
    'lowercase'            => 'يجب أن يحتوي الحقل :attribute على حروف صغيرة.',
    'lt'                   => [
        'array'   => 'يجب أن يحتوي حقل :attribute على أقل من :value عناصر/عنصر.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :value.',
        'string'  => 'يجب أن يكون طول نّص حقل :attribute أقل من :value حروفٍ/حرفًا.',
    ],
    'lte'                  => [
        'array'   => 'يجب أن لا يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.',
        'file'    => 'يجب أن لا يتجاوز حجم ملف حقل :attribute :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :value.',
        'string'  => 'يجب أن لا يتجاوز طول نّص حقل :attribute :value حروفٍ/حرفًا.',
    ],
    'mac_address'          => 'الحقل :attribute يجب أن يكون عنوان MAC صالحاً.',
    'max'                  => [
        'array'   => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',
        'file'    => 'يجب أن لا يتجاوز حجم ملف حقل :attribute :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أصغر من :max.',
        'string'  => 'يجب أن لا يتجاوز طول نّص حقل :attribute :max حروفٍ/حرفًا.',
    ],
    'max_digits'           => 'يجب ألا يحتوي الحقل :attribute على أكثر من :max رقم/أرقام.',
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'array'   => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :min.',
        'string'  => 'يجب أن يكون طول نص حقل :attribute على الأقل :min حروفٍ/حرفًا.',
    ],
    'min_digits'           => 'يجب أن يحتوي الحقل :attribute على الأقل :min رقم/أرقام.',
    'missing'              => 'يجب أن يكون الحقل :attribute مفقوداً.',
    'missing_if'           => 'يجب أن يكون الحقل :attribute مفقوداً عندما :other يساوي :value.',
    'missing_unless'       => 'يجب أن يكون الحقل :attribute مفقوداً ما لم يكن :other يساوي :value.',
    'missing_with'         => 'يجب أن يكون الحقل :attribute مفقوداً عند توفر :values.',
    'missing_with_all'     => 'يجب أن يكون الحقل :attribute مفقوداً عند توفر :values.',
    'multiple_of'          => 'حقل :attribute يجب أن يكون من مضاعفات :value',
    'not_in'               => 'يجب ألا يكون حقل :attribute موجودًا في القائمة.',
    'not_regex'            => 'صيغة حقل :attribute غير صحيحة.',
    'numeric'              => 'يجب على حقل :attribute أن يكون رقمًا.',
    'password'             => [
        'letters'       => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed'         => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers'       => 'يجب أن يحتوي حقل :attribute على رقمٍ واحدٍ على الأقل.',
        'symbols'       => 'يجب أن يحتوي حقل :attribute على رمزٍ واحدٍ على الأقل.',
        'uncompromised' => 'حقل :attribute ظهر في بيانات مُسربة. الرجاء اختيار :attribute مختلف.',
    ],
    'present'              => 'يجب تقديم حقل :attribute.',
    'present_if'           => 'يجب أن يكون الحقل :attribute متوفراً عندما :other يساوي :value.',
    'present_unless'       => 'يجب أن يكون الحقل :attribute متوفراً ما لم يكن :other يساوي :value.',
    'present_with'         => 'يجب أن يكون الحقل :attribute متوفراً عند توفر :values.',
    'present_with_all'     => 'يجب أن يكون الحقل :attribute متوفراً عند توفر :values.',
    'prohibited'           => 'حقل :attribute محظور.',
    'prohibited_if'        => 'حقل :attribute محظور إذا كان :other هو :value.',
    'prohibited_unless'    => 'حقل :attribute محظور ما لم يكن :other ضمن :values.',
    'prohibits'            => 'الحقل :attribute يحظر تواجد الحقل :other.',
    'regex'                => 'صيغة حقل :attribute غير صحيحة.',
    'required'             => 'حقل :attribute مطلوب.',
    'required_array_keys'  => 'الحقل :attribute يجب أن يحتوي على مدخلات لـ: :values.',
    'required_if'          => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عند قبول الحقل :other.',
    'required_unless'      => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'حقل :attribute مطلوب إذا توفّر :values.',
    'required_with_all'    => 'حقل :attribute مطلوب إذا توفّر :values.',
    'required_without'     => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'حقل :attribute مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size'                 => [
        'array'   => 'يجب أن يحتوي حقل :attribute على :size عنصرٍ/عناصر بالضبط.',
        'file'    => 'يجب أن يكون حجم ملف حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة حقل :attribute مساوية لـ :size.',
        'string'  => 'يجب أن يحتوي نص حقل :attribute على :size حروفٍ/حرفًا بالضبط.',
    ],
    'starts_with'          => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values',
    'string'               => 'يجب أن يكون حقل :attribute نصًا.',
    'timezone'             => 'يجب أن يكون حقل :attribute نطاقًا زمنيًا صحيحًا.',
    'ulid'                 => 'حقل :attribute يجب أن يكون بصيغة ULID سليمة.',
    'unique'               => 'قيمة حقل :attribute مُستخدمة من قبل.',
    'uploaded'             => 'فشل في تحميل الـ :attribute.',
    'uppercase'            => 'يجب أن يحتوي الحقل :attribute على حروف كبيرة.',
    'url'                  => 'صيغة رابط حقل :attribute غير صحيحة.',
    'uuid'                 => 'حقل :attribute يجب أن يكون بصيغة UUID سليمة.',
];
