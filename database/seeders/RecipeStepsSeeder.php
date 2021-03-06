<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_steps')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $steps = [
            1 => [
                [1, 'Влейте в сковороду масло, дайте ему хорошо нагреться', '/images/products/product-2-1.jpg'],
                [2, 'Разбейте яйца в сковороду', '/images/products/product-2-1.jpg'],
                [3, 'Посолите по вкусу', '/images/products/product-2-1.jpg'],
                [4, 'Жарьте яйца до готовности 5-7 минут', '/images/products/product-2-1.jpg'],
            ],
            2 => [
                [1, 'Подготовить все ингредиенты.', '/images/products/product-2-1.jpg'],
                [2, 'Смесь вина, сахара, нарезанных кубиками яблок, ломтиков апельсинов и пряностей довести до кипения.', '/images/products/product-2-1.jpg'],
                [3, 'Снять с огня, настаивать 10 минут.', '/images/products/product-2-1.jpg'],
                [4, 'Затем процедить и разлить по бокалам.', '/images/products/product-2-1.jpg'],
                [5, 'Готово к подаче!', '/images/products/product-2-1.jpg']
            ],
            3 => [
                [1, 'В подсоленной воде сварить пасту аль денте (макароны аль денте слегка твердоваты на зуб).', '/images/products/product-2-1.jpg'],
                [2, 'В глубокой сковороде разогреть оливковое масло и обжарить бекон и чеснок в течение 5 минут, непрерывно помешивая.', '/images/products/product-2-1.jpg'],
                [3, 'Снять с огня.', '/images/products/product-2-1.jpg'],
                [4, 'Приготовленную пасту откинуть на дуршлаг и положить в сковороду.', '/images/products/product-2-1.jpg'],
                [5, 'Добавить в сковороду с пастой 2 яйца целиком и 1 желток.', '/images/products/product-2-1.jpg'],
                [6, 'Посыпать тертым пармезаном и хорошо перемешать.', '/images/products/product-2-1.jpg'],
                [7, 'Поперчить и еще раз посыпать сыром — по желанию.', '/images/products/product-2-1.jpg']
            ],
            4 => [
                [1, 'Поджарить тонкие ломтики бекона до золотистой корочки.', '/images/products/product-2-1.jpg'],
                [2, 'Подогреть хлеб и одну половину сэндвича намазать майонезом (можно приготовить самостоятельно), на вторую положить сыр, ломтики помидоров, бекон и салат.', '/images/products/product-2-1.jpg'],
                [3, 'Тем временем на сливочном масле поджарить небольшую глазунью — такую, чтобы желток был полуготовым.', '/images/products/product-2-1.jpg'],
                [4, 'Выложить глазунью на латук, закрыть другой половинкой сэндвича и подавать.', '/images/products/product-2-1.jpg']
            ],
            5 => [
                [1, 'Чечевицу залить большим количеством воды, варить до тех пор пока она не начнет развариваться. Чуть посолить.', '/images/products/product-2-1.jpg'],
                [2, 'Нарезать лук кольцами и бекон ленточками. Поджарить бекон и лук до коричневатой корочки.', '/images/products/product-2-1.jpg'],
                [3, 'Всыпать в чечевицу бекон и лук, варить еще минут пять.', '/images/products/product-2-1.jpg'],
                [4, 'Влить сливки, выключить огонь.', '/images/products/product-2-1.jpg'],
                [5, 'Добавить нарезанный тонкими пластинками чеснок. Дать настояться минут десять.', '/images/products/product-2-1.jpg']
            ],
            6 => [
                [1, 'Растопите масло в большой кастрюле с толстым дном и жарьте лук до мягкости. Добавьте чеснок и жарьте еще минуту, затем добавьте нарезанную брокколи и молоко. Тушите 30 минут.', '/images/products/product-2-1.jpg'],
                [2, 'Добавьте еще сливки и голубой сыр, приправьте солью и перцем. Готовьте еще 10 минут, перелейте в блендер и взбейте.', '/images/products/product-2-1.jpg'],
                [3, 'Подавайте со сливками и кусочками голубого сыра.', '/images/products/product-2-1.jpg'],
            ],
            7 => [
                [1, 'Для теста — соединить муку, ­воду, оливковое масло, соль и дрожжи в следующей пропорции: на 1 кг муки — 1,5 л воды, 10–15 г масла, 30 г соли и 3 г свежих дрожжей. Для одной пиццы нам потребуется кусок теста весом 150–170 г.', '/images/products/product-2-1.jpg'],
                [2, 'Его нужно раскатать скалкой на присыпанной мукой поверхности в круг толщиной 1,5 мм. Затем выложить на раскатанное тесто 120 г предварительно натертой моцареллы и нарезанную небольшими кусочками горгонзолу. Главное — не покупать для этих целей свежую моцареллу: натереть ее не получится, так что нужно выбирать твердую моцареллу, пригодную именно для пиццы.', '/images/products/product-2-1.jpg'],
                [3, 'Теперь необходимо отправить пиццу в духовку, разогретую до 180 градусов, на семь-десять минут. Нужно не терять бдительность и проверять пиццу на готовность. Тесто должно подрумяниться, но не подгореть, а сыр расплавиться, но не превратиться в корку.', '/images/products/product-2-1.jpg'],
                [4, 'Как только пицца покажется вам готовой — ее можно вынимать. Столовой ложкой разотрите растаявшие кусочки горгонзолы так, чтобы вся поверхность пиццы покрылась тонким слоем сыра. Корочку можно оставить и без сыра. А можно и не оставлять — на ваше усмотрение.', '/images/products/product-2-1.jpg'],
                [5, 'Затем нужно очистить от кожицы свежую грушу. Делать это лучше овощечисткой, но при отсутствии таковой можно проделать эту операцию и ножом. В этом случае надо быть крайне осторожным, чтобы как можно меньше мякоти груши пострадало от чистки.', '/images/products/product-2-1.jpg'],
                [6, 'Нарезать грушу тонкими кружками, используя острый нож, а лучше мандолину или слайсер. Из-под последних двух кружки выходят ровными и наиболее тонкими, что и требуется в итоге. Сердцевина в грушах конференц не настолько грубая, чтобы ее вырезать. Единственное, от чего стоит избавиться, — это от косточек, если они попадутся при нарезке.', '/images/products/product-2-1.jpg'],
                [7, 'Получившимися кружочками покрыть всю поверхность пиццы. Принципы строгой геометрии здесь не преследуются, так что можно дать волю фантазии: выложить из груши хоть круги, хоть зигзаги, хоть квадраты.', '/images/products/product-2-1.jpg'],
                [8, 'Нарезать пиццу на шесть кусков. Лучше сделать это ножом для пиццы (у него и рукоятка самая для этих целей подходящая, и само лезвие с зазубринами) — куски получатся ровные и аккуратные, а главное, на это уйдет минимум усилий.', '/images/products/product-2-1.jpg'],
            ],
            8 => [
                [1, 'Соединить в чаше миксера 1,8 килограмма обычной пшеничной муки (например «Сокольнической») и 300 грамм итальянской муки семолы, добавить 36 грамм соли и 10 грамм сахара, перемешать. В 200 мл теплой воды развести 16 грамм дрожжей. Замесить тесто, вливая в муку 500 мл теплой воды, а также воду с дрожжами. Затем влить 220 мл молока (3,2%-ное будет в самый раз) и продолжать вымешивать, пока тесто не станет эластичным. Если понадобится, влить еще немного молока. В самом конце хорошо вмешать 50 мл оливкового масла extra virgin. Накрыть чашу с тестом пищевой пленкой и оставить на час при комнатной температуре — подняться. Затем немного помять тесто руками и убрать в холодильник на полчаса — и после этого можно приступать к работе.', '/images/products/product-2-1.jpg'],
                [2, 'Небольшую форму для выпечки (где-то 20×30 см) смазать ложкой оливкового масла, выложить тесто и, разминая, растянуть его по дну формы от центра к краям: должен получиться кочковатый лист (идеальная ровность домашней пицце совсем не к лицу). Дать тесту постоять в тепле пятнадцать-двадцать минут — к примеру, на плите с уже включенной ­духовкой: дрожжи продолжат свою работу и сделают тесто ­пористым.', '/images/products/product-2-1.jpg'],
                [3, 'Разогреть духовку до 250 градусов, поставить в нее форму с тестом на пять минут, чтобы оно немного подсушилось.', '/images/products/product-2-1.jpg'],
                [4, 'Моцареллу (не шарики в рассоле, а плотный, сухой сыр — специально для пиццы), чеддер и горгонзолу (которую можно заменить любым другим голубым сыром) нарезать мелкими кубиками, гауду натереть.', '/images/products/product-2-1.jpg'],
                [5, 'Выложить на подсушенное тесто моцареллу и эмменталь, посыпать пармезаном, а сверху выложить горгонзолу. Вернуть форму в духовку, а через пять минут подавать пиццу на стол, нарезав порционно.', '/images/products/product-2-1.jpg']
            ],
            9 => [
                [1, 'Тесто разморозить, как указано на упаковке. Лучше брать то, которое одним пластом.', '/images/products/product-2-1.jpg'],
                [2, 'Противень застелить пергаментом, на который пластом, не раскатывая, выложить тесто.', '/images/products/product-2-1.jpg'],
                [3, 'Груши очистить, вырезать сердцевину и нарезать на тонкие дольки.', '/images/products/product-2-1.jpg'],
                [4, 'Груши выложить на тесто, не плотно друг к другу.', '/images/products/product-2-1.jpg'],
                [5, 'Посыпать сыром, постараться, чтобы сыр был разбросан равномерно.', '/images/products/product-2-1.jpg'],
                [6, 'Выпекать при температуре 180 градусов в течение 20 минут.', '/images/products/product-2-1.jpg']
            ],
            10 => [
                [1, 'Растопить сливочное масло в сковороде и добавить тонко нарезанный полукольцами лук. Готовить 20-30 минут, пока лук не начнет карамелизоваться. Добавить мелко нарезанный чеснок и шалфей и готовить еще минуту.', '/images/products/product-2-1.jpg'],
                [2, 'Добавить очищенную и нарезанную небольшими кубиками тыкву и готовить до мягкости 5-8 минут.', '/images/products/product-2-1.jpg'],
                [3, 'Уменьшить огонь, посыпать раскрошенной горгонзолой и слегка расплавить.', '/images/products/product-2-1.jpg'],
                [4, 'Влить слегка взбитые яйца и готовить, не перемешивая, 2-4 минуты до готовности.', '/images/products/product-2-1.jpg'],
                [5, 'Порезать на сегменты, посыпать свежим шалфеем и подавать.', '/images/products/product-2-1.jpg']
            ],
            11 => [
                [1, 'В большой кастрюле вскипятить воду.', '/images/products/product-2-1.jpg'],
                [2, 'Масло нарезать кусочками, шоколад поломать и сложить в термостойкую миску или кастрюльку.', '/images/products/product-2-1.jpg'],
                [3, 'Как только вода закипит, снять большую кастрюлю с огня и поставить в нее маленькую так, чтобы в шоколад не попала вода. Размешивать до получения гладкой однородной массы, которая по консистенции должна быть как очень жидкий кефир или даже молоко. Дать смеси остыть.', '/images/products/product-2-1.jpg'],
                [4, 'В другой миске взбить 3 яйца и 130 грамм сахара. Добавить остывшую шоколадную смесь, размешать. Всыпать муку, просеянную с разрыхлителем, тщательно перемешать.', '/images/products/product-2-1.jpg'],
                [5, 'В отдельной миске взбить сливочный сыр, 2 яйца и 70 грамм сахара.', '/images/products/product-2-1.jpg'],
                [6, 'Форму для выпекания смазать маслом или выложить пергамент. Вылить шоколадное тесто, оставив пару столовых ложек, разровнять.', '/images/products/product-2-1.jpg'],
                [7, 'Сверху выложить сырное тесто, не смешивая. Также разровнять.', '/images/products/product-2-1.jpg'],
                [8, 'Сверху выложить оставшееся шоколадное тесто. Поводить вилкой для образования мраморного узора.', '/images/products/product-2-1.jpg'],
                [9, 'Выпекать 30–40 минут при 180 градусах.', '/images/products/product-2-1.jpg']
            ],
            12 => [
                [1, 'Дрожжи развести в теплом молоке (плюс добавляем чуточку сахара (из начальных 100 граммов добавить). Пока дрожжи поднимаются, в отдельной миске взбить яйца.', '/images/products/product-2-1.jpg'],
                [2, 'К яйцам добавить размягченное масло (1/3 от пачки).', '/images/products/product-2-1.jpg'],
                [3, 'В яично-масляную смесь добавить сахар (оставшийся из начальных 100 граммов).', '/images/products/product-2-1.jpg'],
                [4, 'Смешать разведенные в молоке дрожжи со смесью из яйца, масла и сахара, тщательно перемешать в посуде, где в дальнейшем будет замешиваться тесто.', '/images/products/product-2-1.jpg'],
                [5, 'Муку (600–700 граммов (сколько тесто возьмет, на самом деле) соединить с солью.', '/images/products/product-2-1.jpg'],
                [6, 'Часть смеси (муки с солью) всыпать в дрожжевое тесто и вымесить его. Сделать клейковину (чайная ложка муки + чайная ложка воды смешать, слепить шарик и промыть холодной водой). Выложить получившийся шарик в тесто, перемешать.', '/images/products/product-2-1.jpg'],
                [7, 'После добавления клейковины добавить оставшуюся смесь из муки и соли, вымесить тесто. Накрыть получившийся шарик полотенцем и постаивить в теплое место на час.', '/images/products/product-2-1.jpg'],
                [8, 'В это время подготовить начинку. В микроволновой печи размягчить масло (секунд 7–10). Соединяем корицу и тростниковый сахар.', '/images/products/product-2-1.jpg'],
                [9, 'Приступить к «сборке». Необходимо раскатать полученное тесто, которое уже должно было увеличиться вдвое, в тонкий большой пласт, желательно прямоугольный (примерно 40 см на 55 см).', '/images/products/product-2-1.jpg'],
                [10, 'Растопленное масло намазать на пласт. Посыпать пласт смесью корицы и тростникового сахара. Скатать пласт в тугой рулет (чем туже, тем лучше).', '/images/products/product-2-1.jpg'],
                [11, 'Разрезать рулет на кругляши — синнабоны. Резать можно ножом или ниткой (ниткой лучше). Получившиеся синнабоны уложить в форму для выпекания, застеленную пекарской бумагой и смазанную сливочным маслом. Постаивить в духовку на 20–30 минут при 175 градусах (пока не станут золотистого цвета; затем еще сверху их чуть подпекти, чтобы сахар растворился).', '/images/products/product-2-1.jpg'],
                [12, 'После того, как булочки подрумянились и готовы, вынуть их из духовки и сразу покрыть сливочной смесью (можно смазать кисточкой, а можно и залить). В конце можно украсить по желанию тертым шоколадом или орешками. Но оригинальный вкус ни с чем не сравнить.', '/images/products/product-2-1.jpg'],
            ],
            13 => [
                [1, 'Лаваш смазать сыром филадельфия, сверху уложить листья салата.', '/images/products/product-2-1.jpg'],
                [2, 'Затем — нарезанную тонкими кусочками по 0,5 см семгу — завернуть в рулет.', '/images/products/product-2-1.jpg'],
                [3, 'Нарезать на порционные куски.', '/images/products/product-2-1.jpg']
            ],
            14 => [
                [1, 'Каждый банан режем на 3–4 части.', '/images/products/product-2-1.jpg'],
                [2, 'Шоколад растапливаем на водяной бане или в микроволновке (мощность 450, 2–3 минуты).', '/images/products/product-2-1.jpg'],
                [3, 'Орехи рубим не очень мелко.', '/images/products/product-2-1.jpg'],
                [4, 'Кусочки бананов насаживаем на деревянные палочки и обмакиваем в шоколад. Затем обваливаем в орехах, кладем на пергамент и отправляем в холодильник, чтобы шоколад застыл.', '/images/products/product-2-1.jpg']
            ],
            15 => [
                [1, 'Вымойте куриные ножки и снимите с них кожу.', '/images/products/product-2-1.jpg'],
                [2, 'Взбейте яйцо. Добавьте соль и кетчуп. Взбейте.', '/images/products/product-2-1.jpg'],
                [3, 'В полиэтиленовом пакете или в тарелке смешайте сухари с тертым арахисом и специями.', '/images/products/product-2-1.jpg'],
                [4, 'Окуните ножку в яичную смесь.', '/images/products/product-2-1.jpg'],
                [5, 'Затем вываляйте в сухарях. Полностью покройте ножку сухой смесью.', '/images/products/product-2-1.jpg'],
                [6, 'Поджарьте на раскаленной сковороде около 30 минут при 190 градусах.', '/images/products/product-2-1.jpg']
            ],
            16 => [
                [1, 'Гречку промыть, подсушить на сковороде, смазанной маслом.', '/images/products/product-2-1.jpg'],
                [2, 'Обжарить мелко порезанный лук, фарш и натертую на крупной терке морковь до золотистого цвета. Добавить томатную пасту, тщательно перемешать.', '/images/products/product-2-1.jpg'],
                [3, 'К мясу и овощам выложить гречку, залить кипятком так, чтобы гречка была слегка прикрыта водой. Посолить. Тушить на медленном огне под крышкой. В готовую гречку добавить мелко порезанный чеснок, перемешать. Можно добавить черный молотый перец и лавровый лист.', '/images/products/product-2-1.jpg']
            ],
            17 => [
                [1, 'Мясо промыть, нарезать соломкой и слегка обжарить в казане в разогретом растительном масле.', '/images/products/product-2-1.jpg'],
                [2, 'Добавить порезанный тонкими полукольцами лук и обжаривать мясо с луком до мягкости лука.', '/images/products/product-2-1.jpg'],
                [3, 'Добавить томатную пасту, мелко нарезанные или тертые на крупной терке огурцы. Залить водой или бульоном и тушить под крышкой до полной готовности мяса.', '/images/products/product-2-1.jpg'],
                [4, 'В отдельной сковороде обжарить нарезанный соломкой картофель.', '/images/products/product-2-1.jpg'],
                [5, 'Когда картофель будет почти готов, переложить его в казан с тушеным мясом, добавить, соль, перец, лавровый лист и пропущенный через чеснокодавилку или мелко порезанный чеснок.', '/images/products/product-2-1.jpg'],
                [6, 'Осторожно перемешать и тушить картофель с мясом до готовности примерно 5-7 минут.', '/images/products/product-2-1.jpg']
            ],
            18 => [
                [1, 'Мясо вымыть, обсушить, натереть солью и перцем, и обмазать со всех сторон растительным маслом. Положить мясо на смазанный маслом противень.', '/images/products/product-2-1.jpg'],
                [2, 'Запекать в духовке при температуре 180 градусов 60–70 минут.', '/images/products/product-2-1.jpg'],
                [3, 'Приготовить апельсиновый сироп. Для этого апельсин вымыть и обсушить. При помощи мелкой терки с половины или с третьей части апельсина снять цедру. Затем разрезать апельсин пополам, и из обеих половинок выжать сок.', '/images/products/product-2-1.jpg'],
                [4, 'Очистить корень имбиря и натереть его на мелкой терке. В миске соединить апельсиновый сок, цедру, имбирь, соевый соус и мед. Все хорошо перемешать и поставить на сильный огонь. Варить сироп, помешивая, до загустения.', '/images/products/product-2-1.jpg'],
                [5, 'Вынуть мясо из духовки, обмазать его сиропом и запекать еще 5–10 минут. За это время мясо можно еще 1–2 раза смазать сиропом.', '/images/products/product-2-1.jpg'],
                [6, 'Готовую свинину выложить на листья салата и украсить кружками апельсинов.', '/images/products/product-2-1.jpg']
            ],
            19 => [
                [1, 'Говядину очистить от пленок и жира, нашпиговать заранее очищенными и разрезанными вдоль на четвертинки зубчиками чеснока.', '/images/products/product-2-1.jpg'],
                [2, 'Сделать глубокий надрез и вложить в него кусочек сливочного масла. Молодая говядина или телятина нежная и нежирная, масло позволит ей не потерять сочность. Тщательно обмазать кусок мяса аджикой, чем толще слой, тем острее будет ростбиф. Годится самая обычная магазинная жгучая аджика. Обязательно без помидоров.', '/images/products/product-2-1.jpg'],
                [3, 'Завернуть получившийся вкусно пахнущий кусок мяса в пищевую фольгу и запекать в предварительно разогретой духовке при температуре 200 градусов примерно полчаса. Проверить готовность можно деревянной зубочисткой — сок должен быть прозрачный, но еще розовый. Мясо при этом остается не до конца пропеченным.', '/images/products/product-2-1.jpg'],
                [4, 'Выключаем и оставляем мясо дозревать в остывающей духовке еще час. После чего аккуратно, чтобы не пролилось ни капли мясного сока, вскрываем кокон из фольги. Сок и послужит нам соусом к тонко нарезанному ростбифу.', '/images/products/product-2-1.jpg']
            ],
            20 => [
                [1, 'Чеснок очистить и мелко порубить.', '/images/products/product-2-1.jpg'],
                [2, 'Растопить сливочное масло в сковородке и добавить к нему мелкопорубленный чеснок, уменьшить огонь и потушить 1 минуту — очень важно не дать чесноку подгореть.', '/images/products/product-2-1.jpg'],
                [3, 'Оттаявшие мидии отправить тушиться с чесноком. Поперчить и добавить смесь французских трав.', '/images/products/product-2-1.jpg'],
                [4, 'Через 7–8 минут влить сливки и тушить мидии дальше, до загустения сливок. Если сливки долго не густеют, можно добавить немножко муки.', '/images/products/product-2-1.jpg']
            ],
        ];

        $data = [];

        foreach ($steps as $key => $recipe) {
            for ($i = 0; $i < count($recipe); $i++) {
                $data[] = [
                    'recipe_id' => $key,
                    'step_number' => $recipe[$i][0],
                    'description' => $recipe[$i][1],
                    'img' => $recipe[$i][2],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
