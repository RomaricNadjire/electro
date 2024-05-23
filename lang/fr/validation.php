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

    'accepted' => 'Le champ :attribute n\'est pas accepté.',
    'accepted_if' => 'Le champ :attribute doit accepté quand le champ :other est :value.',
    'active_url' => 'Le champ :attribute doit contenir une URL valide.',
    'after' => 'Le champ :attribute doit contenir une date ultérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit contenir une date ultérieure ou égale au :date.',
    'alpha' => 'Le champ :attribute ne peut contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne peut contenir que des lettres, chiffres, tirets.',
    'alpha_num' => 'Le champ :attribute ne peut contenir que des lettres et des chiffres.',
    'array' => 'Le champ :attribute doit contenir un tableau d\'élements.',
    'ascii' => 'Le champ :attribute ne peut contenir q\'un octet de caractères alphanumerique et de symboles.',
    'before' => 'Le champ :attribute doit contenir une date antérieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit contenir une date ultérieure ou égale au :date.',
    'between' => [
        'array' => 'Le champ :attribute doit avoir entre :min et :max d\'élement.',
        'file' => 'Le champ :attribute doit peser entre :min et :max kilooctets.',
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'string' => 'Le champ :attribute doit avoir entre :min and :max de caractères.',
    ],
    'boolean' => 'Le champ :attribute doit contenir un booléen (vrai ou faux).',
    'can' => 'Le champ :attribute contient une valeur non autorisé.',
    'confirmed' => 'La confirmation du champ :attribute n\'est pas correcte.',
    'current_password' => 'Mot de passe incorrect.',
    'date' => 'Le champ :attribute doit contenir une date valide.',
    'date_equals' => 'Le champ :attribute contenir une date égale au :date.',
    'date_format' => 'Le champ :attribute doit respecter le format :format.',
    'decimal' => 'Le champ :attribute doit avoir :decimal places décimale.',
    'declined' => 'Le champ :attribute doit être decliné.',
    'declined_if' => 'Le champ :attribute doit être decliné quand :other est :value.',
    'different' => 'Les champs :attribute et :other doivent être different.',
    'digits' => 'Le champ :attribute doit être :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit être entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute une dimention incorrecte d\'image.',
    'distinct' => 'Le champ :attribute a une valeur dupliqué.',
    'doesnt_end_with' => 'Le champ :attribute ne doit pas se terminer avec l\'une de ces valeurs: :values.',
    'doesnt_start_with' => 'Le champ :attribute ne doit pas se débuter avec l\'une de ces valeurs: :values.',
    'email' => 'Le champ :attribute doit contenir une adresse email valide.',
    'ends_with' => 'Le champ :attribute doit se terminer avec l\'une de ces valeurs: :values.',
    'enum' => 'La valeur de :attribute est invalid.',
    'exists' => 'Cette valeur de :attribute est invalide.',
    'extensions' => 'Le champ :attribute doit contenire l\'une des extensions suivantes: :values.',
    'file' => 'Le champ :attribute doit contenir un foichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit contenir plus que :value élements.',
        'file' => 'Le champ :attribute doit peser plus que :value kilooctets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit avoir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit contenir au moins :value élements',
        'file' => 'Le champ :attribute doit peser au moins :value kilooctets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit avoir au moins :value caractères.',
    ],
    'hex_color' => 'Le champ :attribute doit être une couleur hexadecimale valide.',
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'La valeur de :attribute est invalide.',
    'in_array' => 'Le champ :attribute doit exister dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv- valide.',
    'json' => 'Le champ :attribute doit être un texte JSON valide.',
    'list' => 'Le champ :attribute être une liste.',
    'lowercase' => 'Le champ :attribute doit être en minuscule.',
    'lt' => [
        'array' => 'Le champ :attribute doit contenir moins que :value élements.',
        'file' => 'Le champ :attribute doit peser moins que :value kilooctets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit avoir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute doit contenir au plus :value élements',
        'file' => 'Le champ :attribute doit peser au plus :value kilooctets.',
        'numeric' => 'Le champ :attribute doit être inferieur ou égal à :value.',
        'string' => 'Le champ :attribute doit avoir au plus :value caractères.',
    ],
    'mac_address' => 'Le champ :attribute doit être une adresse MAC valide.',
    'max' => [
        'array' => 'Le champ :attribute ne doit pas dépasser :max élements.',
        'file' => 'Le champ :attribute ne doit pas exceder :max kilooctets.',
        'numeric' => 'Le champ :attribute ne doit pas dépasser :max.',
        'string' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'Le champ :attribute doit avoir au minimum :min element.',
        'file' => 'Le champ :attribute doit peser au minimum  :min kilobytes.',
        'numeric' => 'Le champ :attribute être au minimum :min.',
        'string' => 'Le champ :attribute doit avoir au minimum :min caractères.',
    ],
    'min_digits' => 'Le champ :attribute doit avoir au minimum :min chiffres.',
    'missing' => 'Le champ :attribute doit être omis.',
    'missing_if' => 'Le champ :attribute doit être omis quand :other est :value.',
    'missing_unless' => 'Le champ :attribute doit être omis tant que :other est :value.',
    'missing_with' => 'Le champ :attribute doit être omis quand :values est présent.',
    'missing_with_all' => 'Le champ :attribute doit être omis quand :values sont présent.',
    'multiple_of' => 'Le champ :attribute doit être a multiple de :value.',
    'not_in' => 'Le valeur de :attribute sélectionnée est invalide.',
    'not_regex' => 'Le champ :attribute a un format invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au minimum une lettre.',
        'mixed' => 'LE champ :attribute doit contenir au minimum une majuscule et une minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au minimum un nombre.',
        'symbols' => 'Le champ :attribute doit contenir au minimum un symbole.',
        
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    
    'present' => 'Le champ :attribute doit être présent.',
    'present_if' => 'Le champ :attribute doit être présent lorsque :other est :value.',
    'present_unless' => 'Le champ :attribute doit être présent à moins que :other ne soit :value.',
    'present_with' => 'Le champ :attribute doit être présent lorsque :values est présent.',
    'present_with_all' => 'Le champ :attribute doit être présent lorsque tous les :values sont présents.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other ne soit dans :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est requis.',
    'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour : :values.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_if_accepted' => 'Le champ :attribute est requis lorsque :other est accepté.',
    'required_if_declined' => 'Le champ :attribute est requis lorsque :other est refusé.',
    'required_unless' => 'Le champ :attribute est requis à moins que :other ne soit dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque tous les :values sont présents.',
    'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsque aucun des :values n\'est présent.',
    'same' => 'Le champ :attribute doit correspondre à :other.',
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit être de :size kilooctets.',
        'numeric' => 'Le champ :attribute doit être :size.',
        'string' => 'Le champ :attribute doit avoir :size caractères.',
    ],
    'starts_with' => 'Le champ :attribute doit commencer par l\'un des suivants : :values.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le :attribute a déjà été pris.',
    'uploaded' => 'Le :attribute n\'a pas pu être téléchargé.',
    'uppercase' => 'Le champ :attribute doit être en majuscules.',
    'url' => 'Le champ :attribute doit être une URL valide.',
    'ulid' => 'Le champ :attribute doit être un ULID valide.',
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

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
