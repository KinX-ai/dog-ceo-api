<?php
// src/Util/BreedUtil.php
namespace App\Util;

class MockApi extends \GuzzleHttp\Client
{
    protected $responses;

    public function __construct()
    {
        $responses = [
            // 200s
            'breeds/list/all' => '{"status":"success","message":{"affenpinscher":[],"african":[],"airedale":[],"akita":[],"appenzeller":[],"basenji":[],"beagle":[],"bluetick":[],"borzoi":[],"bouvier":[],"boxer":[],"brabancon":[],"briard":[],"bulldog":["boston","english","french"],"bullterrier":["staffordshire"],"cairn":[],"cattledog":["australian"],"chihuahua":[],"chow":[],"clumber":[],"cockapoo":[],"collie":["border"],"coonhound":[],"corgi":["cardigan"],"cotondetulear":[],"dachshund":[],"dalmatian":[],"dane":["great"],"deerhound":["scottish"],"dhole":[],"dingo":[],"doberman":[],"elkhound":["norwegian"],"entlebucher":[],"eskimo":[],"frise":["bichon"],"germanshepherd":[],"greyhound":["italian"],"groenendael":[],"hound":["afghan","basset","blood","english","ibizan","walker"],"husky":[],"keeshond":[],"kelpie":[],"komondor":[],"kuvasz":[],"labrador":[],"leonberg":[],"lhasa":[],"malamute":[],"malinois":[],"maltese":[],"mastiff":["bull","english","tibetan"],"mexicanhairless":[],"mix":[],"mountain":["bernese","swiss"],"newfoundland":[],"otterhound":[],"papillon":[],"pekinese":[],"pembroke":[],"pinscher":["miniature"],"pointer":["german","germanlonghair"],"pomeranian":[],"poodle":["miniature","standard","toy"],"pug":[],"puggle":[],"pyrenees":[],"redbone":[],"retriever":["chesapeake","curly","flatcoated","golden"],"ridgeback":["rhodesian"],"rottweiler":[],"saluki":[],"samoyed":[],"schipperke":[],"schnauzer":["giant","miniature"],"setter":["english","gordon","irish"],"sheepdog":["english","shetland"],"shiba":[],"shihtzu":[],"spaniel":["blenheim","brittany","cocker","irish","japanese","sussex","welsh"],"springer":["english"],"stbernard":[],"terrier":["american","australian","bedlington","border","dandie","fox","irish","kerryblue","lakeland","norfolk","norwich","patterdale","russell","scottish","sealyham","silky","tibetan","toy","westhighland","wheaten","yorkshire"],"vizsla":[],"weimaraner":[],"whippet":[],"wolfhound":["irish"]}}',
            'breeds/list' => '{"status":"success","message":["affenpinscher","african","airedale","akita","appenzeller","basenji","beagle","bluetick","borzoi","bouvier","boxer","brabancon","briard","bulldog","bullterrier","cairn","cattledog","chihuahua","chow","clumber","cockapoo","collie","coonhound","corgi","cotondetulear","dachshund","dalmatian","dane","deerhound","dhole","dingo","doberman","elkhound","entlebucher","eskimo","frise","germanshepherd","greyhound","groenendael","hound","husky","keeshond","kelpie","komondor","kuvasz","labrador","leonberg","lhasa","malamute","malinois","maltese","mastiff","mexicanhairless","mix","mountain","newfoundland","otterhound","papillon","pekinese","pembroke","pinscher","pointer","pomeranian","poodle","pug","puggle","pyrenees","redbone","retriever","ridgeback","rottweiler","saluki","samoyed","schipperke","schnauzer","setter","sheepdog","shiba","shihtzu","spaniel","springer","stbernard","terrier","vizsla","weimaraner","whippet","wolfhound"]}',
            'breed/affenpinscher/list' => '{"status":"success","message":[]}',
            'breed/hound/list' => '{"status":"success","message":["afghan","basset","blood","english","ibizan","walker"]}',
            'breeds/image/random' => '{"status":"success","message":"https://images.dog.ceo/breeds/sheepdog-shetland/n02105855_17300.jpg"}',
            'breeds/image/random/3' => '{"status":"success","message":["https:\/\/images.dog.ceo\/breeds\/brabancon\/n02112706_363.jpg","https:\/\/images.dog.ceo\/breeds\/mix\/Noah03.jpg","https:\/\/images.dog.ceo\/breeds\/leonberg\/n02111129_3541.jpg"]}',
            'breed/affenpinscher/images' => '{"status":"success","message":["https://images.dog.ceo/breeds/affenpinscher/n02110627_10147.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10185.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10225.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10437.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10439.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10447.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10680.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10787.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10848.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10859.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_10986.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11211.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11262.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11263.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11279.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11283.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11345.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11365.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11422.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11435.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11584.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11614.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11620.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11657.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11663.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11759.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11782.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11783.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11798.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11811.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11819.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11835.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11853.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11858.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11875.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_11942.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12003.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12025.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12070.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12077.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12227.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12272.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12391.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12431.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12512.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12556.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12579.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12676.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12808.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12819.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12893.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12913.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12938.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12973.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_12997.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13014.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13020.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13032.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13060.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13210.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13211.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13221.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13417.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13420.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13453.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13499.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13553.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13567.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13590.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13654.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13662.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13665.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13710.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13782.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1387.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_13939.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1446.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1559.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1581.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1844.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_1966.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2157.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2327.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_233.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2383.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2416.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2748.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2894.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2911.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_2997.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3001.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3026.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3032.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3144.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3246.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3286.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3409.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3561.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3730.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3841.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_3972.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4086.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4130.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4275.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4433.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4457.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4542.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4597.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4607.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_475.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_4839.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_5186.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_5361.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_5522.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_5743.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6069.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6310.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_641.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6414.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6670.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6796.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6811.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6842.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6869.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6965.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_6991.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7013.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7065.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_735.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7404.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7612.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7680.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7694.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_7770.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8033.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8048.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8050.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8071.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8099.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8154.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8250.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8519.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8621.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8695.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8714.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8856.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_8949.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_946.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_9634.jpg","https://images.dog.ceo/breeds/affenpinscher/n02110627_9822.jpg"]}',
            'breed/bullterrier/staffordshire/images' => '{"status":"success","message":["https://images.dog.ceo/breeds/bullterrier-staffordshire/caesar.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_10078.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11023.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1132.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1134.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11569.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11732.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11806.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11820.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1183.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_11836.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_12174.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_12347.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1272.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1275.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_12785.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1309.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_13267.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_13419.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1371.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1384.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_13858.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_14522.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_14608.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_14807.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1487.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1489.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_14914.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_14933.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1505.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1546.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1549.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1602.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1638.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1643.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1727.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1745.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1757.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1826.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1854.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1923.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_1939.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2073.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_225.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2353.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2405.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2416.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2513.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2542.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2557.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_264.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2678.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_269.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2711.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_272.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2737.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2748.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2763.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2780.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2817.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_291.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2975.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_2987.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3113.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3190.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3297.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3306.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3323.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3325.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3353.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3378.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3462.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3529.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3582.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3595.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3614.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_367.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3762.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3799.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3812.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3872.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3877.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3906.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3941.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_3994.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4007.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4022.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4036.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4058.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4090.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_417.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4245.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4263.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4374.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4452.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4658.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4678.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4874.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4888.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4972.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_4997.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5007.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5110.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5134.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5139.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5295.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5325.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5327.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_540.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5428.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5439.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5600.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5646.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5647.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5654.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_567.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5711.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5733.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5734.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5791.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5808.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5820.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5936.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5943.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_5988.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6008.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6028.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6077.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6158.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6177.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_626.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6397.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6473.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6575.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6665.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6821.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6969.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_6992.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_7043.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_7075.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_718.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_7454.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_7577.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_759.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_774.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_7830.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_8205.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_836.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_8541.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_8615.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_8623.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_8691.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_898.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_911.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_9753.jpg","https://images.dog.ceo/breeds/bullterrier-staffordshire/n02093256_9796.jpg"]}',
            'breed/cairn/images/random' => '{"status":"success","message":"https://images.dog.ceo/breeds/cairn/n02096177_2263.jpg"}',
            'breed/corgi/cardigan/images/random' => '{"status":"success","message":"https://images.dog.ceo/breeds/corgi-cardigan/n02113186_5242.jpg"}',
            'breed/spaniel' => '{"status":"success","message":{"name":"Spaniel","info":"A spaniel is a type of gun dog. Spaniels were especially bred to flush game out of denser brush. By the late 17th century spaniels had been specialized into water and land breeds."}}',
            'breed/spaniel/cocker' => '{"status":"success","message":{"name":"Cocker Spaniel","info":"The Cocker Spaniel is primarily a beloved companion dog breed, though he remains a capable bird dog at heart. Beautiful to look at (and labor-intensive to groom), the Cocker’s amenable, cheerful disposition also makes him a treat to have in the family. Never more pleased than when he’s pleasing you, he’s as happy to snuggle on the couch with his favorite adults as to romp in the yard with the kids."}}',

            // 404s
            'breed/DOESNOTEXIST/list' => '{"status":"error","body":"Breed not found (master breed does not exist)"}',
            'breed/DOESNOTEXIST/images' => '{"status":"error","body":"Breed not found (master breed does not exist)"}',
            'breed/DOESNOTEXIST/images/random' => '{"status":"error","body":"Breed not found (master breed does not exist)"}',
            'breed/DOESNOTEXIST' => '{"status":"error","body":"Breed not found (master breed does not exist)"}',
            'breed/spaniel/DOESNOTEXIST' => '{"status":"error","body":"Breed not found (sub breed does not exist)"}',
            'breeds/image/random/DOESNOTEXIST' => '{"status":"error","body":"Nothing..."}',
        ];

        $this->setResponses($responses);
    }

    private function setResponses(array $responses)
    {
        $this->responses = $responses;

        return $this;
    }

    public function request($method, $uri = '', array $options = [])
    {
        $code = 500;
        $message = 'Unit test failed.';

        foreach ($this->responses as $key => $message) {
            if (substr($uri, (strlen($key) * -1)) == $key) {
                $code = ((strpos($message, 'DOESNOTEXIST') !== false) ? 404 : 200);
                $uri = $key;
                $data = $message;
            }
        }

        $response = new \GuzzleHttp\Psr7\Response($code, ['Content-Type' => 'application/json'], $data);

        return $response;
    }
}