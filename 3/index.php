<?php
// function IsMobile(){
//   $pda_patterns = array(
//     'MIDP','FLY-','MMP','Mobile','MOT-',
//     'Nokia','Obigo','Panasonic','PPC',
//     'ReqwirelessWeb','Samsung','SEC-SGH',
//     'Smartphone','SonyEricsson','Symbian',
//     'WAP Browser','j2me','BREW', 'iPod', 'iPhone'
//   );
//   $agent = $_SERVER['HTTP_USER_AGENT'];
//   $user_agent = strtolower($agent);
//   foreach($pda_patterns as $val){
//     $val = strtolower($val);
//     if(strpos($user_agent, $val) !== false){ return true; }
//   }
//   return false;
// }
function IsMobile(){
  $pda_patterns = array('Mobile', 'iPod', 'iPhone');
  $agent = $_SERVER['HTTP_USER_AGENT'];
  $user_agent = strtolower($agent);
  foreach($pda_patterns as $val){
    $val = strtolower($val);
    if(strpos($user_agent, $val) !== false){ return true; }
  }
  return false;
}

if (IsMobile()) {
    echo <<<EOD
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <style>
        body{ color: #fff; background-color: #1f1f1f; padding: 0px; margin: 0px; }
        #logocen{ position: absolute; top: 50px; width: 100%; left: 0px; height: 100px; perspective: 1000px; z-index: 2; }
        .logodiv{ text-align: center; color: #ffffff; width: 80%; height: 500px; overflow: hidden; background-color: #0e1127; line-height: 500px; font-size: 100px; border: 1px solid #ffffff; transition: transform 1s linear, height 1s linear, top 1s linear, line-height 1s linear; }
        div#logodiv > span{ display: inline-block; transition: transform 0s linear 0.5s; }
        div#logodiv.nick{ transform: rotateY(0deg); }
        div#logodiv.nick > span{ transform: scaleX(1); }
        div#logodiv.name{ transform: rotateY(180deg); }
        div#logodiv.name > span{ transform: scaleX(-1); }
        #content{ position: absolute; z-index: 1; left: 0px; top: 600px; overflow: auto; text-align: justify; padding: 5px; }
    </style>
    <title>Terropen - особистий сайт Павла Новака</title>
</head>
<body>
    <center id="logocen">
        <div id="logodiv" class="logodiv nick">
            <span>TERROPEN</span>
        </div>
    </center>


    <div id="content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio magnam qui, numquam dignissimos rerum deleniti obcaecati enim nihil veniam laudantium doloremque ipsa a, iure quia quisquam tenetur eius laborum non quo quam eos! Modi repellendus eos expedita est. Culpa sit molestiae ut quisquam repellendus, neque et totam explicabo alias, pariatur magni, amet optio sequi. Sapiente error est earum quae maiores a nobis, delectus dolorum ipsam odio modi suscipit quasi rerum sed, minus natus molestias explicabo asperiores doloremque sunt provident voluptas dolores, ratione? Sunt ea maiores minima, eveniet doloribus quasi quos doloremque debitis nisi totam qui ex esse illo adipisci possimus amet rerum. Non inventore voluptatibus, amet reprehenderit cum quos commodi, labore eum pariatur, libero rerum ab vel modi minima dolores! Cumque neque, commodi doloremque omnis asperiores impedit necessitatibus natus ad quos. Esse dolorum, doloribus obcaecati nam alias optio possimus dicta iste quis. Ducimus aliquid, voluptatem molestiae doloribus, pariatur fuga eum repellat quod veniam facilis sunt est nulla repudiandae, voluptas omnis in. Ab deserunt temporibus quibusdam expedita possimus, qui maiores vel inventore pariatur, iure alias nostrum velit! Repudiandae facilis minus, voluptatibus, blanditiis quod sequi quis sit ab expedita eos cupiditate quo tempora natus autem incidunt magni ipsum tempore! Dolorum perspiciatis neque minus sit asperiores, autem, reprehenderit quas saepe, necessitatibus fugiat, ab id in omnis tenetur. Totam doloremque, officiis, autem repellat dicta veniam qui asperiores tenetur ad, placeat optio voluptate dolore esse voluptatibus tempora eligendi. Quis tempora dolorem laboriosam blanditiis laudantium dolorum quas commodi magni quod veniam assumenda, amet enim totam sit ad illum ipsa dolore sint iusto cumque animi eius veritatis, officiis. Veniam voluptatem illum voluptatum nostrum saepe neque repellat porro ducimus aspernatur magni, culpa odio. Inventore saepe maiores impedit neque explicabo eos cum! Facere voluptates et vel quidem doloribus, praesentium? Amet sapiente maxime molestiae fugiat debitis cum, suscipit maiores incidunt quae libero, ipsum ab eveniet ex nemo iste nisi, necessitatibus. Aliquid facere voluptatem dolore quidem vitae laborum nulla voluptatum aliquam modi aperiam. Explicabo mollitia doloremque, voluptas expedita eligendi, vero omnis sint, ad blanditiis consequuntur error laudantium nesciunt nam accusantium perspiciatis neque aspernatur ratione, officiis molestias quo quia molestiae voluptatibus rerum! Neque quidem, eveniet porro? Labore omnis veniam, quos voluptatum odio tempora deleniti, quidem consequatur cupiditate saepe modi ad officiis nam necessitatibus atque dolores sint hic rem tenetur eos unde assumenda tempore distinctio. Magni ratione incidunt odit fuga sed, iste. Rerum enim, recusandae saepe dolorum impedit repellat nostrum et ipsum ex eum reprehenderit consequuntur commodi! Blanditiis, aut, laudantium! Et autem veritatis dolore rem officia eaque repellendus, minima odit alias praesentium animi magnam aliquam nulla voluptatibus excepturi earum, ex nobis, delectus vitae sequi, similique deleniti. Enim est, aspernatur nesciunt totam dignissimos sapiente voluptatem vel, provident, non mollitia voluptates aliquid excepturi ipsam, rem labore odit laborum magnam sunt! Reprehenderit doloribus omnis velit consequatur suscipit facilis, fugiat qui numquam, earum quo dignissimos eum. Dicta expedita similique quasi accusamus eos ex iusto tempore esse magni dolorem dolores rerum fuga quis commodi, modi amet. Beatae laudantium molestias adipisci delectus harum. Velit voluptatum non ipsa, eum deserunt ea, sunt mollitia nostrum accusantium provident repudiandae inventore explicabo qui illum dolore et labore voluptate ullam, distinctio eius maiores. Aspernatur quam consequuntur quod, illo asperiores hic natus nesciunt illum odio reprehenderit, iure nobis dolorum! Totam animi molestiae soluta id atque laboriosam repudiandae magni distinctio, repellat dolores consequuntur? Illo ipsam esse, iste totam dolor, natus unde ipsa quae amet commodi illum obcaecati quidem nisi, autem qui dicta id quas praesentium suscipit labore rerum. Ea similique ipsa, quasi unde velit dolore labore nulla accusamus vitae. In hic modi quibusdam eos earum perspiciatis dolor ducimus. Laborum numquam iure eum cupiditate possimus excepturi, placeat quidem, dolorum quod eveniet in nulla dolore earum distinctio quibusdam voluptatibus quae a accusamus, eaque. Eius iste, sed atque, distinctio exercitationem error possimus cum facere laudantium, quae non placeat corporis quas cumque. Recusandae modi temporibus aperiam distinctio tenetur maxime assumenda accusamus, magnam alias sit odit molestias possimus quo harum reprehenderit est adipisci ea quod tempora, cumque, placeat necessitatibus rerum. Voluptatem odit perferendis in, illum deleniti reiciendis fugit error, inventore id sunt veniam consectetur nostrum dolores. Laudantium sapiente eius ut, blanditiis nobis sunt, omnis praesentium vitae corrupti modi voluptates. Rem aliquid cupiditate libero esse iste laboriosam accusamus eligendi fuga, ratione amet ipsa, quis magnam, modi maxime eum magni, nostrum reiciendis dolores neque nam repudiandae ducimus aut beatae. Dolor atque, voluptates ex eos possimus perspiciatis necessitatibus quidem, earum, a impedit libero? Enim porro quos illo obcaecati at culpa, ipsum odio! Laborum quo doloremque deleniti aut eum delectus. Aliquam ipsum labore dicta aspernatur nam accusantium inventore eligendi voluptas, minus ad ullam. Nobis officiis eligendi beatae eveniet alias expedita laudantium, maiores natus ipsum est, culpa magni cumque consequuntur similique facilis minima illo tenetur cum ut dolore! Hic dolorem alias facilis delectus consequuntur nostrum fugiat officiis, adipisci placeat aperiam similique ea maxime amet! Nihil voluptate quaerat maxime quas, sint distinctio magni cupiditate alias id possimus dolor deserunt dolorum at dolores omnis hic perspiciatis aspernatur iste facilis nemo ipsum inventore nobis pariatur. Incidunt repellendus velit odit, totam nostrum temporibus maiores ab molestias veritatis in quam eveniet consequatur impedit tenetur numquam. Voluptates modi maxime libero animi sequi est deleniti aspernatur, expedita praesentium dolores pariatur nemo ducimus cumque, tempore soluta provident, repudiandae maiores nostrum, eveniet quasi laboriosam obcaecati consequuntur. Dolore temporibus sequi quasi ab tempora soluta similique, accusantium repellendus inventore adipisci maiores exercitationem nam iusto cupiditate ipsum hic eaque iure officiis aut magnam fugiat. Consectetur voluptates voluptas fugiat. Ducimus dolorem necessitatibus, laborum earum. Facere quidem nisi voluptatem vero temporibus optio eaque quam cumque sint explicabo, exercitationem numquam. Harum doloribus excepturi alias rem quod eaque, odio aperiam sunt eveniet quae. Nesciunt repellat veniam illo tenetur id iure, pariatur qui adipisci. In quia quam cupiditate dolore fuga voluptatibus hic, doloribus, explicabo blanditiis eum aliquid ipsam saepe ratione molestias nulla maiores dolorum voluptate reiciendis vero minima suscipit rerum fugiat. Sapiente maiores necessitatibus dolores obcaecati corporis esse quis ullam minima non, voluptatibus aliquid neque atque ipsum voluptate quidem, unde voluptates eius eligendi dolorum minus optio voluptatum labore in libero. Quis, eum, expedita.
    </div>
    <script>
        var IsRed = true;
        var Timeout = setTimeout(SkewLogo, 10000);
        function SkewLogo () {
            clearTimeout(Timeout);
            if (IsRed) {
                document.getElementById('logodiv').classList.add('name');
                document.getElementById('logodiv').classList.remove('nick');
                setTimeout(function(){ 
                    document.querySelector('#logodiv > span').innerHTML = 'Павло Новак';
                }, 500);
            } else {
                document.getElementById('logodiv').classList.add('nick');
                document.getElementById('logodiv').classList.remove('name');
                setTimeout(function(){ 
                    document.querySelector('#logodiv > span').innerHTML = 'TERROPEN';
                }, 500);
            }
            IsRed = !IsRed;
            Timeout = setTimeout(SkewLogo, 10000);
        }

        document.getElementById('logodiv').onclick = SkewLogo;
    </script>
</body>
</html>
EOD;
} else {
    <<<EOD
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    
    <style>
        body{ color: #fff; background-color: #1f1f1f; padding: 0px; margin: 0px; }
        #logocen{ position: absolute; top: 50px; width: 100%; left: 0px; height: 100px; perspective: 200px; z-index: 2; }
        .logodiv{ text-align: center; color: #ffffff; width: 400px; height: 200px; overflow: hidden; background-color: #0e1127; line-height: 200px; font-size: 50px; border: 1px solid #ffffff; transition: transform 1s linear, height 1s linear, top 1s linear, line-height 1s linear; }
        div#logodiv > span{ display: inline-block; transition: transform 0s linear 0.5s; }
        div#logodiv.nick{ transform: rotateX(0deg); }
        div#logodiv.nick > span{ transform: scaleY(1); }
        div#logodiv.name{ transform: rotateX(180deg); }
        div#logodiv.name > span{ transform: scaleY(-1); }
        #content{ z-index: 1; position: absolute; bottom: 0px; right: 0px; width: 50%; top: 300px; overflow: auto; text-align: justify; padding: 5px; }
    </style>
    <title>Terropen - особистий сайт Павла Новака</title>
</head>
<body>
    <center id="logocen">
        <div id="logodiv" class="logodiv nick">
            <span>TERROPEN</span>
        </div>
    </center>


    <div id="content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio magnam qui, numquam dignissimos rerum deleniti obcaecati enim nihil veniam laudantium doloremque ipsa a, iure quia quisquam tenetur eius laborum non quo quam eos! Modi repellendus eos expedita est. Culpa sit molestiae ut quisquam repellendus, neque et totam explicabo alias, pariatur magni, amet optio sequi. Sapiente error est earum quae maiores a nobis, delectus dolorum ipsam odio modi suscipit quasi rerum sed, minus natus molestias explicabo asperiores doloremque sunt provident voluptas dolores, ratione? Sunt ea maiores minima, eveniet doloribus quasi quos doloremque debitis nisi totam qui ex esse illo adipisci possimus amet rerum. Non inventore voluptatibus, amet reprehenderit cum quos commodi, labore eum pariatur, libero rerum ab vel modi minima dolores! Cumque neque, commodi doloremque omnis asperiores impedit necessitatibus natus ad quos. Esse dolorum, doloribus obcaecati nam alias optio possimus dicta iste quis. Ducimus aliquid, voluptatem molestiae doloribus, pariatur fuga eum repellat quod veniam facilis sunt est nulla repudiandae, voluptas omnis in. Ab deserunt temporibus quibusdam expedita possimus, qui maiores vel inventore pariatur, iure alias nostrum velit! Repudiandae facilis minus, voluptatibus, blanditiis quod sequi quis sit ab expedita eos cupiditate quo tempora natus autem incidunt magni ipsum tempore! Dolorum perspiciatis neque minus sit asperiores, autem, reprehenderit quas saepe, necessitatibus fugiat, ab id in omnis tenetur. Totam doloremque, officiis, autem repellat dicta veniam qui asperiores tenetur ad, placeat optio voluptate dolore esse voluptatibus tempora eligendi. Quis tempora dolorem laboriosam blanditiis laudantium dolorum quas commodi magni quod veniam assumenda, amet enim totam sit ad illum ipsa dolore sint iusto cumque animi eius veritatis, officiis. Veniam voluptatem illum voluptatum nostrum saepe neque repellat porro ducimus aspernatur magni, culpa odio. Inventore saepe maiores impedit neque explicabo eos cum! Facere voluptates et vel quidem doloribus, praesentium? Amet sapiente maxime molestiae fugiat debitis cum, suscipit maiores incidunt quae libero, ipsum ab eveniet ex nemo iste nisi, necessitatibus. Aliquid facere voluptatem dolore quidem vitae laborum nulla voluptatum aliquam modi aperiam. Explicabo mollitia doloremque, voluptas expedita eligendi, vero omnis sint, ad blanditiis consequuntur error laudantium nesciunt nam accusantium perspiciatis neque aspernatur ratione, officiis molestias quo quia molestiae voluptatibus rerum! Neque quidem, eveniet porro? Labore omnis veniam, quos voluptatum odio tempora deleniti, quidem consequatur cupiditate saepe modi ad officiis nam necessitatibus atque dolores sint hic rem tenetur eos unde assumenda tempore distinctio. Magni ratione incidunt odit fuga sed, iste. Rerum enim, recusandae saepe dolorum impedit repellat nostrum et ipsum ex eum reprehenderit consequuntur commodi! Blanditiis, aut, laudantium! Et autem veritatis dolore rem officia eaque repellendus, minima odit alias praesentium animi magnam aliquam nulla voluptatibus excepturi earum, ex nobis, delectus vitae sequi, similique deleniti. Enim est, aspernatur nesciunt totam dignissimos sapiente voluptatem vel, provident, non mollitia voluptates aliquid excepturi ipsam, rem labore odit laborum magnam sunt! Reprehenderit doloribus omnis velit consequatur suscipit facilis, fugiat qui numquam, earum quo dignissimos eum. Dicta expedita similique quasi accusamus eos ex iusto tempore esse magni dolorem dolores rerum fuga quis commodi, modi amet. Beatae laudantium molestias adipisci delectus harum. Velit voluptatum non ipsa, eum deserunt ea, sunt mollitia nostrum accusantium provident repudiandae inventore explicabo qui illum dolore et labore voluptate ullam, distinctio eius maiores. Aspernatur quam consequuntur quod, illo asperiores hic natus nesciunt illum odio reprehenderit, iure nobis dolorum! Totam animi molestiae soluta id atque laboriosam repudiandae magni distinctio, repellat dolores consequuntur? Illo ipsam esse, iste totam dolor, natus unde ipsa quae amet commodi illum obcaecati quidem nisi, autem qui dicta id quas praesentium suscipit labore rerum. Ea similique ipsa, quasi unde velit dolore labore nulla accusamus vitae. In hic modi quibusdam eos earum perspiciatis dolor ducimus. Laborum numquam iure eum cupiditate possimus excepturi, placeat quidem, dolorum quod eveniet in nulla dolore earum distinctio quibusdam voluptatibus quae a accusamus, eaque. Eius iste, sed atque, distinctio exercitationem error possimus cum facere laudantium, quae non placeat corporis quas cumque. Recusandae modi temporibus aperiam distinctio tenetur maxime assumenda accusamus, magnam alias sit odit molestias possimus quo harum reprehenderit est adipisci ea quod tempora, cumque, placeat necessitatibus rerum. Voluptatem odit perferendis in, illum deleniti reiciendis fugit error, inventore id sunt veniam consectetur nostrum dolores. Laudantium sapiente eius ut, blanditiis nobis sunt, omnis praesentium vitae corrupti modi voluptates. Rem aliquid cupiditate libero esse iste laboriosam accusamus eligendi fuga, ratione amet ipsa, quis magnam, modi maxime eum magni, nostrum reiciendis dolores neque nam repudiandae ducimus aut beatae. Dolor atque, voluptates ex eos possimus perspiciatis necessitatibus quidem, earum, a impedit libero? Enim porro quos illo obcaecati at culpa, ipsum odio! Laborum quo doloremque deleniti aut eum delectus. Aliquam ipsum labore dicta aspernatur nam accusantium inventore eligendi voluptas, minus ad ullam. Nobis officiis eligendi beatae eveniet alias expedita laudantium, maiores natus ipsum est, culpa magni cumque consequuntur similique facilis minima illo tenetur cum ut dolore! Hic dolorem alias facilis delectus consequuntur nostrum fugiat officiis, adipisci placeat aperiam similique ea maxime amet! Nihil voluptate quaerat maxime quas, sint distinctio magni cupiditate alias id possimus dolor deserunt dolorum at dolores omnis hic perspiciatis aspernatur iste facilis nemo ipsum inventore nobis pariatur. Incidunt repellendus velit odit, totam nostrum temporibus maiores ab molestias veritatis in quam eveniet consequatur impedit tenetur numquam. Voluptates modi maxime libero animi sequi est deleniti aspernatur, expedita praesentium dolores pariatur nemo ducimus cumque, tempore soluta provident, repudiandae maiores nostrum, eveniet quasi laboriosam obcaecati consequuntur. Dolore temporibus sequi quasi ab tempora soluta similique, accusantium repellendus inventore adipisci maiores exercitationem nam iusto cupiditate ipsum hic eaque iure officiis aut magnam fugiat. Consectetur voluptates voluptas fugiat. Ducimus dolorem necessitatibus, laborum earum. Facere quidem nisi voluptatem vero temporibus optio eaque quam cumque sint explicabo, exercitationem numquam. Harum doloribus excepturi alias rem quod eaque, odio aperiam sunt eveniet quae. Nesciunt repellat veniam illo tenetur id iure, pariatur qui adipisci. In quia quam cupiditate dolore fuga voluptatibus hic, doloribus, explicabo blanditiis eum aliquid ipsam saepe ratione molestias nulla maiores dolorum voluptate reiciendis vero minima suscipit rerum fugiat. Sapiente maiores necessitatibus dolores obcaecati corporis esse quis ullam minima non, voluptatibus aliquid neque atque ipsum voluptate quidem, unde voluptates eius eligendi dolorum minus optio voluptatum labore in libero. Quis, eum, expedita.
    </div>
    <script>
        var IsRed = true;
        var Timeout = setTimeout(SkewLogo, 10000);
        function SkewLogo () {
            clearTimeout(Timeout);
            if (IsRed) {
                document.getElementById('logodiv').classList.add('name');
                document.getElementById('logodiv').classList.remove('nick');
                setTimeout(function(){ 
                    document.querySelector('#logodiv > span').innerHTML = 'Павло Новак';
                }, 500);
            } else {
                document.getElementById('logodiv').classList.add('nick');
                document.getElementById('logodiv').classList.remove('name');
                setTimeout(function(){ 
                    document.querySelector('#logodiv > span').innerHTML = 'TERROPEN';
                }, 500);
            }
            IsRed = !IsRed;
            Timeout = setTimeout(SkewLogo, 10000);
        }

        document.getElementById('logodiv').onclick = SkewLogo;
    </script>
</body>
</html>

EOD;
}

?>