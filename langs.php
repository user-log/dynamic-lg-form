<?php 

    $get_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


    $lang_en = array(

        '1' => 'Please fill out the registration form',
        '2' => 'Share the link below with your friends'
    );

    $lang_id = array(

        '1' => 'Silakan isi formulir pendaftaran',
        '2' => 'Bagikan tautan di bawah ini dengan teman-teman Anda'
    );

    $lang_pt = array(

        '1' => 'Por favor, preencha o formulário de inscrição',
        '2' => 'Compartilhe o link abaixo com seus amigos'
    );

    $lang_es = array(

        '1' => 'Por favor complete el formulario de registro',
        '2' => 'Comparte el siguiente enlace con tus amigos'
    );

    $lang_fr = array(

        '1' => 'Veuillez remplir le formulaire d\'inscription',
        '2' => 'Partagez le lien ci-dessous avec vos amis'
    );

    $lang_tr = array(

        '1' => 'Lütfen kayıt formunu doldurun',
        '2' => 'Aşağıdaki bağlantıyı arkadaşlarınızla paylaşın'
    );

    $lang_fi = array(

        '1' => 'Mangyaring punan ang form sa pagpaparehistro',
        '2' => 'Ibahagi ang link sa ibaba sa iyong mga kaibigan'
    );

    $lang_ur = array(

        '1' => 'برائے کرم رجسٹریشن فارم پُر کریں',
        '2' => 'اپنے دوستوں کے ساتھ نیچے دیئے گئے لنک کو شیئر کریں'
    );
    
    $lang_ar = array(

        '1' => 'يرجى ملء استمارة التسجيل',
        '2' => 'شارك الرابط مع اصدقائك'
    );

    

    $lang_pa = array(
        
        '1' => 'ਕਿਰਪਾ ਕਰਕੇ ਰਜਿਸਟ੍ਰੇਸ਼ਨ ਫਾਰਮ ਭਰੋ',
        '2' => 'ਹੇਠਾਂ ਦਿੱਤੇ ਲਿੰਕ ਨੂੰ ਆਪਣੇ ਦੋਸਤਾਂ ਨਾਲ ਸਾਂਝਾ ਕਰੋ'
    );


    if($get_lang == 'ar'){

        $get1 = $lang_ar['1'];
        $get2 = $lang_ar['2'];

    }elseif($get_lang == 'pa'){

        $get1 = $lang_pa['1'];
        $get2 = $lang_pa['2'];

    }elseif($get_lang == 'fr'){

        $get1 = $lang_fr['1'];
        $get2 = $lang_fr['2'];

    }elseif($get_lang == 'tr'){

        $get1 = $lang_tr['1'];
        $get2 = $lang_tr['2'];

    }elseif($get_lang == 'id'){

        $get1 = $lang_id['1'];
        $get2 = $lang_id['2'];

    }elseif($get_lang == 'pt'){

        $get1 = $lang_pt['1'];
        $get2 = $lang_pt['2'];

    }elseif($get_lang == 'es'){

        $get1 = $lang_es['1'];
        $get2 = $lang_es['2'];

    }elseif($get_lang == 'fi' || $get_lang == 'tl' || $get_lang == 'ph'){

        $get1 = $lang_fi['1'];
        $get2 = $lang_fi['2'];

    }elseif($get_lang == 'ur' || $get_lang == 'pk'){

        $get1 = $lang_ur['1'];
        $get2 = $lang_ur['2'];

    }else{

        $get1 = $lang_en['1'];
        $get2 = $lang_en['2'];

    }



?>

