<?php
/*
include "data_retrive_tmptable_forBorder.inc";

//$udataD = $_POST['udataD'];
$tb1 = "10001";
$hello = new data_retrive_tmptable();
$data1 = $hello->get_data($tb1);
echo $data1;

$tb2 = "10002";
$hello = new data_retrive_tmptable();
$data2 = $hello->get_data($tb2);

$tb3 = "10003";
$hello = new data_retrive_tmptable();
$data3 = $hello->get_data($tb3);

//echo $data1 ;
*/
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polygon</title>
    <style>
        html, body {
            height: 80%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
    </style>
</head>
<body>
<div id="map"></div>

<script>

    var markersAry = [];


    /*===================================================function for notification==============================*/

    function notificatioFunction( boatLatLongASInput ,google_path , map  ) {

     //   var markersAry = [];

        var SLOuterBorder = [
            {lng: 84.286862, lat:10.142957},
            {lng: 84.158215, lat:10.327257},
            {lng: 84.138908, lat:10.368973},
            {lng: 83.804451, lat:10.847158},
            {lng: 83.802459, lat:10.849147},
            {lng: 83.802357, lat:10.849292},
            {lng: 83.791774, lat:10.859856},
            {lng: 83.780887, lat:10.883301},
            {lng: 83.780544, lat:10.88379},
            {lng: 83.779997, lat:10.884968},
            {lng: 83.779914, lat:10.885086},
            {lng: 83.779215, lat:10.886593},
            {lng: 83.772185, lat:10.896627},
            {lng: 83.771776, lat:10.897509},
            {lng: 83.771638, lat:10.897706},
            {lng: 83.750377, lat:10.94348},
            {lng: 83.747596, lat:10.947449},
            {lng: 83.74711, lat:10.948495},
            {lng: 83.366667, lat:11.443333},
            {lng: 82.406667, lat:11.266667},
            {lng: 81.933333, lat:11.045},
            {lng: 81.041667, lat:10.695},
            {lng: 80.766667, lat:10.55},
            {lng: 80.158333, lat:10.14},
            {lng: 80.083333, lat:10.096667},
            {lng: 80.05, lat:10.083333},
            {lng: 79.583333, lat:9.95},
            {lng: 79.376667, lat:9.669167},
            {lng: 79.511667, lat:9.363333},
            {lng: 79.518422, lat:9.317603},
            {lng: 79.533333, lat:9.216667},
            {lng: 79.533333, lat:9.1},
            {lng: 79.521667, lat:9.0},
            {lng: 79.488333, lat:8.896667},
            {lng: 79.303333, lat:8.666667},
            {lng: 79.216667, lat:8.62},
            {lng: 79.078333, lat:8.52},
            {lng: 78.923333, lat:8.37},
            {lng: 78.895, lat:8.203333},
            {lng: 78.761667, lat:7.588333},
            {lng: 78.646667, lat:7.35},
            {lng: 78.203333, lat:6.513333},
            {lng: 77.845, lat:5.898333},
            {lng: 77.176667, lat:5.0},
            {lng: 77.023333, lat:4.784},
            {lng: 77.167273, lat:4.510774},
            {lng: 77.167415, lat:4.510575},
            {lng: 77.168079, lat:4.509179},
            {lng: 77.193344, lat:4.473726},
            {lng: 77.204137, lat:4.451033},
            {lng: 77.540734, lat:3.977892},
            {lng: 77.542571, lat:3.976081},
            {lng: 77.54274, lat:3.975843},
            {lng: 77.559929, lat:3.958899},
            {lng: 77.568251, lat:3.947182},
            {lng: 77.574187, lat:3.941329},
            {lng: 77.574454, lat:3.940953},
            {lng: 77.987695, lat:3.53295},
            {lng: 77.995512, lat:3.527545},
            {lng: 78.00556, lat:3.51761},
            {lng: 78.005578, lat:3.517598},
            {lng: 78.013544, lat:3.509722},
            {lng: 78.020846, lat:3.504672},
            {lng: 78.040901, lat:3.484839},
            {lng: 78.043591, lat:3.482978},
            {lng: 78.050087, lat:3.476554},
            {lng: 78.074351, lat:3.459771},
            {lng: 78.075429, lat:3.458705},
            {lng: 78.075703, lat:3.458516},
            {lng: 78.075924, lat:3.458297},
            {lng: 78.553298, lat:3.127617},
            {lng: 78.557249, lat:3.125797},
            {lng: 78.577317, lat:3.111875},
            {lng: 78.578737, lat:3.111221},
            {lng: 78.579012, lat:3.11103},
            {lng: 79.106275, lat:2.867679},
            {lng: 79.115294, lat:2.865296},
            {lng: 79.124495, lat:2.861042},
            {lng: 79.126224, lat:2.860585},
            {lng: 79.126978, lat:2.860237},
            {lng: 79.131821, lat:2.858957},
            {lng: 79.132749, lat:2.858528},
            {lng: 79.1957, lat:2.841887},
            {lng: 79.245637, lat:2.818787},
            {lng: 79.806921, lat:2.66995},
            {lng: 79.822987, lat:2.66858},
            {lng: 79.874078, lat:2.654995},
            {lng: 79.881257, lat:2.654382},
            {lng: 79.891491, lat:2.65166},
            {lng: 79.892086, lat:2.651609},
            {lng: 79.894778, lat:2.650893},
            {lng: 79.896184, lat:2.650772},
            {lng: 79.898953, lat:2.650036},
            {lng: 79.898993, lat:2.650032},
            {lng: 79.90224, lat:2.649169},
            {lng: 79.962317, lat:2.644029},
            {lng: 80.008399, lat:2.631763},
            {lng: 80.586913, lat:2.58185},
            {lng: 80.587308, lat:2.581884},
            {lng: 80.58771, lat:2.581849},
            {lng: 80.588944, lat:2.581958},
            {lng: 80.5902, lat:2.581849},
            {lng: 80.590644, lat:2.581888},
            {lng: 80.591095, lat:2.581849},
            {lng: 80.59193, lat:2.581923},
            {lng: 80.59278, lat:2.581849},
            {lng: 80.59357, lat:2.581919},
            {lng: 80.594374, lat:2.581849},
            {lng: 81.172836, lat:2.632585},
            {lng: 81.733889, lat:2.782459},
            {lng: 81.735054, lat:2.783001},
            {lng: 81.73638, lat:2.783354},
            {lng: 81.770292, lat:2.799116},
            {lng: 81.863319, lat:2.823891},
            {lng: 82.130951, lat:2.948115},
            {lng: 82.269013, lat:2.984761},
            {lng: 82.358894, lat:3.026404},
            {lng: 82.364389, lat:3.027861},
            {lng: 82.395568, lat:3.0423},
            {lng: 82.463124, lat:3.060196},
            {lng: 82.990406, lat:3.303883},
            {lng: 83.059727, lat:3.352013},
            {lng: 83.066854, lat:3.3553},
            {lng: 83.544264, lat:3.68623},
            {lng: 83.557866, lat:3.699692},
            {lng: 83.560041, lat:3.701197},
            {lng: 83.563504, lat:3.704625},
            {lng: 83.623195, lat:3.74593},
            {lng: 83.630276, lat:3.752935},
            {lng: 83.708806, lat:3.807252},
            {lng: 83.709109, lat:3.807551},
            {lng: 83.709309, lat:3.807689},
            {lng: 83.7226, lat:3.820831},
            {lng: 83.741343, lat:3.833789},
            {lng: 83.753071, lat:3.845383},
            {lng: 83.757916, lat:3.848732},
            {lng: 83.76159, lat:3.852365},
            {lng: 83.76171, lat:3.852447},
            {lng: 83.780791, lat:3.871307},
            {lng: 83.793755, lat:3.880267},
            {lng: 83.826996, lat:3.913115},
            {lng: 83.831094, lat:3.915946},
            {lng: 83.834384, lat:3.919196},
            {lng: 83.836881, lat:3.920922},
            {lng: 83.840333, lat:3.924332},
            {lng: 83.840774, lat:3.924636},
            {lng: 84.254313, lat:4.332631},
            {lng: 84.258379, lat:4.338351},
            {lng: 84.259317, lat:4.339275},
            {lng: 84.596154, lat:4.81243},
            {lng: 84.598417, lat:4.817186},
            {lng: 84.598573, lat:4.817405},
            {lng: 84.599295, lat:4.81892},
            {lng: 84.59938, lat:4.819039},
            {lng: 84.599542, lat:4.81938},
            {lng: 84.601088, lat:4.821548},
            {lng: 84.609167, lat:4.838518},
            {lng: 84.619579, lat:4.85312},
            {lng: 84.629201, lat:4.873327},
            {lng: 84.655652, lat:4.91041},
            {lng: 84.655945, lat:4.911024},
            {lng: 84.657262, lat:4.91287},
            {lng: 84.907303, lat:5.436919},
            {lng: 84.913216, lat:5.458244},
            {lng: 84.916539, lat:5.465196},
            {lng: 84.93106, lat:5.517544},
            {lng: 84.945356, lat:5.547439},
            {lng: 84.945906, lat:5.54942},
            {lng: 84.94617, lat:5.549972},
            {lng: 84.946946, lat:5.552769},
            {lng: 84.971433, lat:5.603959},
            {lng: 85.127035, lat:6.163163},
            {lng: 85.129526, lat:6.188966},
            {lng: 85.142497, lat:6.235461},
            {lng: 85.144477, lat:6.255947},
            {lng: 85.148521, lat:6.270438},
            {lng: 85.151615, lat:6.302423},
            {lng: 85.171693, lat:6.374331},
            {lng: 85.173438, lat:6.392338},
            {lng: 85.178632, lat:6.410929},
            {lng: 85.178819, lat:6.412855},
            {lng: 85.180382, lat:6.418452},
            {lng: 85.180554, lat:6.420225},
            {lng: 85.181211, lat:6.422574},
            {lng: 85.23744, lat:7.000128},
            {lng: 85.237306, lat:7.001832},
            {lng: 85.237465, lat:7.003456},
            {lng: 85.222392, lat:7.194948},
            {lng: 85.229427, lat:7.266723},
            {lng: 85.229061, lat:7.271386},
            {lng: 85.229496, lat:7.275827},
            {lng: 85.227976, lat:7.295171},
            {lng: 85.228046, lat:7.295876},
            {lng: 85.227946, lat:7.29714},
            {lng: 85.228064, lat:7.298344},
            {lng: 85.182719, lat:7.876864},
            {lng: 85.180381, lat:7.885857},
            {lng: 85.1803, lat:7.886887},
            {lng: 85.179626, lat:7.889478},
            {lng: 85.179438, lat:7.891881},
            {lng: 85.177967, lat:7.897541},
            {lng: 85.177887, lat:7.898559},
            {lng: 85.031727, lat:8.460519},
            {lng: 85.031214, lat:8.461636},
            {lng: 85.030845, lat:8.463054},
            {lng: 85.03053, lat:8.463741},
            {lng: 85.030062, lat:8.465539},
            {lng: 85.02976, lat:8.466197},
            {lng: 85.028404, lat:8.471408},
            {lng: 85.028064, lat:8.472148},
            {lng: 85.02762, lat:8.473853},
            {lng: 85.027372, lat:8.474392},
            {lng: 85.026845, lat:8.476418},
            {lng: 85.025479, lat:8.47939},
            {lng: 85.025173, lat:8.480568},
            {lng: 85.023724, lat:8.483719},
            {lng: 85.015428, lat:8.515603},
            {lng: 85.015151, lat:8.516207},
            {lng: 85.014646, lat:8.518148},
            {lng: 85.014096, lat:8.519344},
            {lng: 85.013763, lat:8.520623},
            {lng: 85.013479, lat:8.521241},
            {lng: 85.01298, lat:8.523158},
            {lng: 85.012962, lat:8.523197},
            {lng: 85.012105, lat:8.526492},
            {lng: 85.010992, lat:8.528914},
            {lng: 85.01054, lat:8.530652},
            {lng: 85.009199, lat:8.533569},
            {lng: 85.008868, lat:8.534843},
            {lng: 85.002364, lat:8.548992},
            {lng: 84.962608, lat:8.701749},
            {lng: 84.962332, lat:8.70235},
            {lng: 84.961826, lat:8.704294},
            {lng: 84.960456, lat:8.707273},
            {lng: 84.960154, lat:8.708434},
            {lng: 84.959074, lat:8.710783},
            {lng: 84.958589, lat:8.712644},
            {lng: 84.95722, lat:8.715623},
            {lng: 84.956917, lat:8.716785},
            {lng: 84.955554, lat:8.71975},
            {lng: 84.955245, lat:8.720935},
            {lng: 84.954963, lat:8.72155},
            {lng: 84.954463, lat:8.72347},
            {lng: 84.953914, lat:8.724663},
            {lng: 84.953581, lat:8.725946},
            {lng: 84.952803, lat:8.727637},
            {lng: 84.952791, lat:8.727681},
            {lng: 84.952472, lat:8.728376},
            {lng: 84.952009, lat:8.730156},
            {lng: 84.951497, lat:8.731267},
            {lng: 84.951127, lat:8.732691},
            {lng: 84.950831, lat:8.733334},
            {lng: 84.950352, lat:8.735176},
            {lng: 84.949828, lat:8.736315},
            {lng: 84.94947, lat:8.737692},
            {lng: 84.94915, lat:8.738386},
            {lng: 84.948687, lat:8.740166},
            {lng: 84.948107, lat:8.741427},
            {lng: 84.947997, lat:8.741851},
            {lng: 84.704865, lat:9.270127},
            {lng: 84.702383, lat:9.273698},
            {lng: 84.69903, lat:9.280975},
            {lng: 84.697511, lat:9.28316},
            {lng: 84.697342, lat:9.283526},
            {lng: 84.695751, lat:9.285814},
            {lng: 84.693322, lat:9.289958},
            {lng: 84.686661, lat:9.304416},
            {lng: 84.686323, lat:9.304903},
            {lng: 84.68498, lat:9.307816},
            {lng: 84.684806, lat:9.308067},
            {lng: 84.683406, lat:9.311107},
            {lng: 84.68311, lat:9.311532},
            {lng: 84.682515, lat:9.312822},
            {lng: 84.680899, lat:9.315147},
            {lng: 84.680827, lat:9.315304},
            {lng: 84.680784, lat:9.315366},
            {lng: 84.680036, lat:9.316989},
            {lng: 84.67842, lat:9.319313},
            {lng: 84.678347, lat:9.31947},
            {lng: 84.674333, lat:9.325242},
            {lng: 84.67428, lat:9.325357},
            {lng: 84.672593, lat:9.327782},
            {lng: 84.6718, lat:9.329503},
            {lng: 84.670281, lat:9.331687},
            {lng: 84.670112, lat:9.332055},
            {lng: 84.668813, lat:9.333922},
            {lng: 84.66853, lat:9.334535},
            {lng: 84.666984, lat:9.336758},
            {lng: 84.666842, lat:9.337067},
            {lng: 84.666435, lat:9.337652},
            {lng: 84.665161, lat:9.340417},
            {lng: 84.659449, lat:9.348629},
            {lng: 84.659404, lat:9.348726},
            {lng: 84.659053, lat:9.349231},
            {lng: 84.657723, lat:9.352117},
            {lng: 84.643606, lat:9.372411},
            {lng: 84.638687, lat:9.383083},
            {lng: 84.638655, lat:9.38313},
            {lng: 84.637904, lat:9.384759},
            {lng: 84.637834, lat:9.384859},
            {lng: 84.637113, lat:9.386424},
            {lng: 84.636777, lat:9.386907},
            {lng: 84.636223, lat:9.388109},
            {lng: 84.636153, lat:9.38821},
            {lng: 84.635432, lat:9.389774},
            {lng: 84.561971, lat:9.495341},
            {lng: 84.530778, lat:9.614749},
            {lng: 84.286862, lat:10.142957}
        ];
        var SLborderYouCreatedLatLng = [
            {lng:79.4260025, lat:9.7049962  },
            {lng:79.4045448, lat:9.6774147 },
            {lng:79.3975067, lat:9.6685306 },
            {lng:79.4076347, lat:9.644077  },
            {lng:79.4239426, lat:9.6075201 },
            {lng:79.4726944, lat:9.5015508  },
            {lng:79.5005035, lat:9.436531   },
            {lng:79.5214462, lat:9.385387  },
            {lng:79.5293427, lat:9.366079  },
            {lng:79.5447922, lat:9.2674901 },
            {lng:79.5516586, lat:9.2169991 },
            {lng:79.5513153, lat:9.1298936 },
            {lng:79.552002, lat:9.0987067  },
            {lng:79.5406723, lat:8.9993652 },
            {lng:79.5053101, lat:8.8888029  },
            {lng:79.4349289, lat:8.8019576  },
            {lng:79.3810272, lat:8.7327381  },
            {lng:79.3168259, lat:8.6536629  },
            {lng:79.2261887, lat:8.6058024  },
            {lng:79.1530609, lat:8.5518249  },
            {lng:79.0926361, lat:8.5080261  },
            {lng:79.0225983, lat:8.4397716 },
            {lng:78.9405441, lat:8.3626736  },
            {lng:78.934021, lat:8.3191932   },
            {lng:78.9189148, lat:8.2328973  },
            {lng:78.9144516, lat:8.2029952  },
            {lng:78.8993454, lat:8.1323084  },
            {lng:78.8902473, lat:8.0967904  },
            {lng:78.8818359, lat:8.0524309  },
            {lng:78.8620949, lat:7.9636975  },
            {lng:78.8447571, lat:7.8783457  },
            {lng:78.8303375, lat:7.8157658  },
            {lng:78.8124847, lat:7.7351465  },
            {lng:78.7802124, lat:7.5844116  },
            {lng:78.7407303, lat:7.4993235  },
            {lng:78.69524, lat:7.4087714    },
            {lng:78.6710358, lat:7.35089    },
            {lng:78.6233139, lat:7.2657566  },
            {lng:78.5144806, lat:7.0615414  },
            {lng:78.4849548, lat:7.0058305  },
            {lng:78.4437561, lat:6.9271085  },
            {lng:78.3991241, lat:6.840874   },
            {lng:78.3472824, lat:6.7454185  },
            {lng:78.307457, lat:6.6698931   },
            {lng:78.273983, lat:6.6069747   },
            {lng:78.2223129, lat:6.5102797  },
            {lng:78.1337357, lat:6.3562456  },
            {lng:78.0964851, lat:6.2926056  },
            {lng:78.0187225, lat:6.1565981  },
            {lng:77.9021645, lat:5.9575585 },
            {lng:77.8621674, lat:5.8906266  },
            {lng:77.786293, lat:5.7885058   },
            {lng:77.6939392, lat:5.6645016  },
            {lng:77.5663948, lat:5.4931409  },
            {lng:77.4597931, lat:5.3494194  },
            {lng:77.3938751, lat:5.2595122  },
            {lng:77.3334503, lat:5.1801917 },
            {lng:77.2637558, lat:5.0847887 },
            {lng:77.1847916, lat:4.9767167 },
            {lng:77.1020508, lat:4.8593905 },
            {lng:77.0721817, lat:4.8210755 },
            {lng:77.0469475, lat:4.7837847 },
            {lng:77.0599937, lat:4.7531637 },
            {lng:77.0895195, lat:4.698932  },
            {lng:77.1420479, lat:4.5993539 },
            {lng:77.1847916, lat:4.5189283 },
            {lng:77.1961212, lat:4.5014731 },
            {lng:77.2089958, lat:4.4831617 },
            {lng:77.2196388, lat:4.4597157 },
            {lng:77.2345734, lat:4.4403764 },
            {lng:77.3913002, lat:4.2269268},
            {lng:77.548027, lat:4.0106786  },
            {lng:77.5633049, lat:3.9897869 },
            {lng:77.580986, lat:3.9716347  },
            {lng:77.5981522, lat:3.9524546 },
            {lng:77.6393509, lat:3.9128942 },
            {lng:77.6779747, lat:3.8741883 },
            {lng:77.7200317, lat:3.835138  },
            {lng:77.7593422, lat:3.7943731 },
            {lng:77.7977943, lat:3.755148  },
            {lng:77.8429413, lat:3.7104394 },
            {lng:77.8862, lat:3.667613   },
            {lng:77.9294586, lat:3.6247845 },
            {lng:78.003788, lat:3.5523141  },
            {lng:78.0152893, lat:3.5437475 },
            {lng:78.0355453, lat:3.5264427 },
            {lng:78.0568314, lat:3.5041687 },
            {lng:78.0709076, lat:3.4935455 },
            {lng:78.0959702, lat:3.4750404 },
            {lng:78.1694412, lat:3.4256915},
            {lng:78.2590485, lat:3.3650301 },
            {lng:78.5759354, lat:3.1453154  },
            {lng:78.6586761, lat:3.1041779 },
            {lng:78.7359238, lat:3.068867  },
            {lng:78.9055252, lat:2.9906988 },
            {lng:79.07444, lat:2.9128679   },
            {lng:79.1269684, lat:2.8885233 },
            {lng:79.2021561, lat:2.861092  },
            {lng:79.2598343, lat:2.8425755 },
            {lng:79.3274689, lat:2.8199439 },
            {lng:79.408493, lat:2.7986835  },
            {lng:79.61586, lat:2.7421014   },
            {lng:79.7470093, lat:2.707808  },
            {lng:79.8297501, lat:2.6937474 },
            {lng:79.8905182, lat:2.6807155 },
            {lng:79.9663925, lat:2.6690552  },
            {lng:80.0141144, lat:2.6529364  },
            {lng:80.0838089, lat:2.6464203  },
            {lng:80.2015686, lat:2.6399041  },
            {lng:80.3873062, lat:2.6210412  },
            {lng:80.59021, lat:2.6025211   },
            {lng:80.761528, lat:2.6237849  },
            {lng:81.0276031, lat:2.6457344 },
            {lng:81.1704254, lat:2.6532794 },
            {lng:81.4128113, lat:2.7249548  },
            {lng:81.6215515, lat:2.7767368  },
            {lng:81.7300415, lat:2.8041701  },
            {lng:81.7633438, lat:2.8189152  },
            {lng:81.8543243, lat:2.8436042 },
            {lng:81.99543, lat:2.9090963    },
            {lng:82.1205711, lat:2.968413   },
            {lng:82.2501755, lat:3.002613   },
            {lng:82.3875046, lat:3.0623532  },
            {lng:82.4589157, lat:3.0812088  },
            {lng:82.5704956, lat:3.1340027  },
            {lng:82.7682495, lat:3.2262143  },
            {lng:82.9172516, lat:3.294425   },
            {lng:83.0459976, lat:3.3703424  },
            {lng:83.054924, lat:3.3747978   },
            {lng:83.1016159, lat:3.406671   },
            {lng:83.1886482, lat:3.4678438  },
            {lng:83.2679558, lat:3.5237013  },
            {lng:83.3628845, lat:3.5889783  },
            {lng:83.4514618, lat:3.6508245  },
            {lng:83.5276794, lat:3.7029021  },
            {lng:83.5457039, lat:3.7196896 },
            {lng:83.5860443, lat:3.7479536  },
            {lng:83.6159134, lat:3.7709068  },
            {lng:83.6651802, lat:3.806363  },
            {lng:83.6928177, lat:3.8245188  },
            {lng:83.7082672, lat:3.840105   },
            {lng:83.7254333, lat:3.8508954  },
            {lng:83.7422562, lat:3.8654535  },
            {lng:83.7640572, lat:3.8870334 },
            {lng:83.780365, lat:3.9000495   },
            {lng:83.8092041, lat:3.9279651  },
            {lng:83.8840485, lat:3.9993766 },
            {lng:83.9667892, lat:4.0815693 },
            {lng:84.1125298, lat:4.2252149  },
            {lng:84.2390442, lat:4.3505193  },
            {lng:84.2765522, lat:4.4028089  },
            {lng:84.3241882, lat:4.4706687  },
            {lng:84.4330215, lat:4.6233087  },
            {lng:84.4620323, lat:4.6631745  },
            {lng:84.5198822, lat:4.7439258  },
            {lng:84.5755005, lat:4.8217597  },
            {lng:84.5871735, lat:4.8439964  },
            {lng:84.5985031, lat:4.8626404 },
            {lng:84.6362686, lat:4.9218188 },
            {lng:84.6772957, lat:5.0085245 },
            {lng:84.8161697, lat:5.3025873 },
            {lng:84.8573685, lat:5.3849685 },
            {lng:84.885006, lat:5.4425603 },
            {lng:84.8916149, lat:5.4635791 },
            {lng:84.8944473, lat:5.4758824 },
            {lng:84.906292, lat:5.5132181 },
            {lng:84.9093819, lat:5.5239826 },
            {lng:84.9253464, lat:5.5584962 },
            {lng:84.9495506, lat:5.6096648 },
            {lng:85.0263691, lat:5.8852478 },
            {lng:85.0495434, lat:5.9701073 },
            {lng:85.0630188, lat:6.0140686 },
            {lng:85.0944328, lat:6.1294607 },
            {lng:85.1043034, lat:6.1660703 },
            {lng:85.1071358, lat:6.1907313 },
            {lng:85.1169205, lat:6.2273367 },
            {lng:85.1203537, lat:6.2399645 },
            {lng:85.1220703, lat:6.2578818 },
            {lng:85.1263618, lat:6.273495 },
            {lng:85.1405239, lat:6.3456679 },
            {lng:85.1491928, lat:6.3770592 },
            {lng:85.1509953, lat:6.3951424 },
            {lng:85.1564884, lat:6.4156984 },
            {lng:85.1613808, lat:6.4501557 },
            {lng:85.1647282, lat:6.4861457 },
            {lng:85.170908, lat:6.5500173 },
            {lng:85.1784611, lat:6.6306766 },
            {lng:85.1834393, lat:6.6786737 },
            {lng:85.1878166, lat:6.7235122 },
            {lng:85.1915073, lat:6.760079 },
            {lng:85.1950264, lat:6.7942566 },
            {lng:85.1985455, lat:6.8326076 },
            {lng:85.202322, lat:6.8706147 },
            {lng:85.2055836, lat:6.9073407 },
            {lng:85.2095318, lat:6.9474718 },
            {lng:85.2131367, lat:6.9845326 },
            {lng:85.2139091, lat:7.0034452 },
            {lng:85.211935, lat:7.0394793 },
            {lng:85.2078152, lat:7.0822395 },
            {lng:85.2054119, lat:7.1234628 },
            {lng:85.1998329, lat:7.1935508 },
            {lng:85.2042532, lat:7.2524318 },
            {lng:85.2070427, lat:7.2758883 },
            {lng:85.2035236, lat:7.3154765 },
            {lng:85.2004337, lat:7.3557421 },
            {lng:85.197773, lat:7.3953231 },
            {lng:85.1945972, lat:7.437539 },
            {lng:85.1909065, lat:7.4769851  },
            {lng:85.1826668, lat:7.5757334 },
            {lng:85.1797485, lat:7.6227809 },
            {lng:85.1762295, lat:7.6658253 },
            {lng:85.1729679, lat:7.7075044  },
            {lng:85.1704788, lat:7.7475635  },
            {lng:85.1671314, lat:7.7924661 },
            {lng:85.1603508, lat:7.875625  },
            {lng:85.141983, lat:7.9472066 },
            {lng:85.1193237, lat:8.0349238 },
            {lng:85.0963211, lat:8.1214324 },
            {lng:85.0772667, lat:8.1967086 },
            {lng:85.0655937, lat:8.2414768 },
            {lng:85.055294, lat:8.2814835 },
            {lng:85.044651, lat:8.3214013  },
            {lng:85.0358105, lat:8.352823 },
            {lng:85.0235367, lat:8.4002056 },
            {lng:85.0141811, lat:8.4362906 },
            {lng:85.0032806, lat:8.4746644 },
            {lng:84.9940109, lat:8.5102331 },
            {lng:84.9801922, lat:8.5453742 },
            {lng:84.9681759, lat:8.5891686 },
            {lng:84.9575329, lat:8.630582  },
            {lng:84.9472332, lat:8.6702938 },
            {lng:84.9388218, lat:8.702196  },
            {lng:84.9343586, lat:8.714498  },
            {lng:84.9288654, lat:8.7299385 },
            {lng:84.9258614, lat:8.7391855 },
            {lng:84.9181366, lat:8.7550492 },
            {lng:84.9100685, lat:8.7716756 },
            {lng:84.8970222, lat:8.7996674 },
            {lng:84.8836327, lat:8.829523 },
            {lng:84.8648357, lat:8.8693832 },
            {lng:84.8455238, lat:8.9116981 },
            {lng:84.8285294, lat:8.9491754 },
            {lng:84.8104191, lat:8.9885987 },
            {lng:84.791708, lat:9.0281872 },
            {lng:84.775486, lat:9.0638725 },
            {lng:84.7578907, lat:9.1005712 },
            {lng:84.7401237, lat:9.1387068 },
            {lng:84.7231293, lat:9.1763299 },
            {lng:84.705534, lat:9.2147963 },
            {lng:84.6905136, lat:9.248345 },
            {lng:84.6825314, lat:9.2636781 },
            {lng:84.6796989, lat:9.2714714 },
            {lng:84.6729183, lat:9.2817211 },
            {lng:84.665966, lat:9.2945116 },
            {lng:84.6589279, lat:9.3087416 },
            {lng:84.6448517, lat:9.3294926 },
            {lng:84.6367836, lat:9.342366 },
            {lng:84.6218491, lat:9.3648934 },
            {lng:84.6124077, lat:9.3855564 },
            {lng:84.5937824, lat:9.4092664 },
            {lng:84.574728, lat:9.437039 },
            {lng:84.5558453, lat:9.4641321 },
            {lng:84.5415115, lat:9.485805 },
            {lng:84.5296669, lat:9.5260147 },
            {lng:84.5190239, lat:9.5676586 },
            {lng:84.5088959, lat:9.6075201 },
            {lng:84.4927597, lat:9.6424692 },
            {lng:84.4759369, lat:9.6794453 },
            {lng:84.4575691, lat:9.7196321 },
            {lng:84.4394588, lat:9.7580376 },
            {lng:84.3637562, lat:9.9228604 },
            {lng:84.3092537, lat:10.0408663 },
            {lng:84.2661667, lat:10.1344965 },
            {lng:84.2268562, lat:10.1885665 },
            {lng:84.1845417, lat:10.248962 },
            {lng:84.1541576, lat:10.292541 },
            {lng:84.1369057, lat:10.3182126 },
            {lng:84.1189671, lat:10.3583203 },
            {lng:84.1169071, lat:10.3654969 },
            {lng:84.0923595, lat:10.3953837 },
            {lng:84.0639496, lat:10.4369165 },
            {lng:84.0350246, lat:10.4784437 },
            {lng:84.012537, lat:10.510345 },
            {lng:83.9872169, lat:10.5454495 },
            {lng:83.9659309, lat:10.5785251 },
            {lng:83.9401817, lat:10.6138749 },
            {lng:83.9161491, lat:10.6490519 },
            {lng:83.8905716, lat:10.6854056 },
            {lng:83.8331509, lat:10.7662792 },
            {lng:83.8116074, lat:10.79697 },
            {lng:83.7831116, lat:10.8386169 },
            {lng:83.7708378, lat:10.8504186 },
            {lng:83.7505817, lat:10.8904566 },
            {lng:83.7281799, lat:10.9371468 },
            {lng:83.7240601, lat:10.945321 },
            {lng:83.6898994, lat:10.985262 },
            {lng:83.6600304, lat:11.0245236 },
            {lng:83.629303, lat:11.0646223 },
            {lng:83.6008072, lat:11.1018519 },
            {lng:83.5781479, lat:11.131329 },
            {lng:83.5489655, lat:11.16855 },
            {lng:83.5224438, lat:11.2034089 },
            {lng:83.4966087, lat:11.2364115 },
            {lng:83.4686279, lat:11.2737874 },
            {lng:83.4376431, lat:11.3150299 },
            {lng:83.3767891, lat:11.392533 },
            {lng:83.3621979, lat:11.412221 },
            {lng:83.3560181, lat:11.4196246 },
            {lng:83.3340454, lat:11.414745} ,
            {lng:83.2784271, lat:11.4037233 },
            {lng:83.1709671, lat:11.3851286 },
            {lng:83.0605888, lat:11.3637558 },
            {lng:82.9244614, lat:11.3396885 },
            {lng:82.7782059, lat:11.3117476 },
            {lng:82.6733208, lat:11.2930627 },
            {lng:82.5878334, lat:11.2767335 },
            {lng:82.4755669, lat:11.2563627 },
            {lng:82.415657, lat:11.2459243 },
            {lng:82.3370361, lat:11.2087131 },
            {lng:82.2003937, lat:11.1448874 },
            {lng:82.10289, lat:11.0977248 },
            {lng:81.9777489, lat:11.0401088 },
            {lng:81.9439316, lat:11.0252818 },
            {lng:81.855526, lat:10.9905702 },
            {lng:81.7628288, lat:10.953495 },
            {lng:81.5764046, lat:10.8811851 },
            {lng:81.3609695, lat:10.7950309 },
            {lng:81.2517929, lat:10.7530407 },
            {lng:81.1372948, lat:10.7076712 },
            {lng:81.052494, lat:10.6752844 },
            {lng:80.9771347, lat:10.6349647 },
            {lng:80.7783508, lat:10.5350705 },
            {lng:80.5879784, lat:10.4071181 },
            {lng:80.4463577, lat:10.3113726 },
            {lng:80.2975273, lat:10.2112056 },
            {lng:80.2231979, lat:10.1617016 },
            {lng:80.144577, lat:10.111345 },
            {lng:80.089817, lat:10.0795723 },
            {lng:80.0340271, lat:10.0599664 },
            {lng:79.9542046, lat:10.0366405},
            {lng:79.8814201, lat:10.0161867},
            {lng:79.8132706, lat:9.9960697},
            {lng:79.7492409, lat:9.9781493 },
            {lng:79.7107887, lat:9.9676671 },
            {lng:79.6750832, lat:9.9568464 },
            {lng:79.6139717, lat:9.9394312 },
            {lng:79.6000671, lat:9.9357113 },
            {lng:79.593544, lat:9.9333441 },
            {lng:79.577837, lat:9.9108546 },
            {lng:79.5571518, lat:9.8843049 },
            {lng:79.539299, lat:9.8582604 },
            {lng:79.4986153, lat:9.8039663},
            {lng:79.4735527, lat:9.769457 },
            {lng:79.4454002, lat:9.7325754 },
            {lng:79.4260025, lat:9.7049962 }
        ];

        var SLLatLonForFunction = new google.maps.Polygon({paths: SLOuterBorder});
        var LatLonForFunctionYuCreated = new google.maps.Polygon({paths: SLborderYouCreatedLatLng});

       // x = google.maps.geometry.poly.containsLocation(boatLatLongASInput, LatLonForFunctionYuCreated);
      //  y = google.maps.geometry.poly.containsLocation(boatLatLongASInput, SLLatLonForFunction);



        var All_Distencec = [];
        var i;

        /*==================================find the shortest length end ===============================================*/

        if (google.maps.geometry.poly.containsLocation(boatLatLongASInput, SLLatLonForFunction) == true) {

            if (google.maps.geometry.poly.containsLocation(boatLatLongASInput, LatLonForFunctionYuCreated) == true) {

                //alert("you are within 2 km to srilanken border. :- ");



                /*============this will show wher is the boart====================================*/

              //  for (var i = 0; i < google_path.length; i++) {

                    var marker = new google.maps.Marker({
                        position: google_path[0],
                        map: map,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            fillColor: "#008C00",
                            fillOpacity: 1,
                            strokeColor: '#008C00',
                            strokeWeight: .5,
                            scale: 5
                        }
                    });

                markersAry.push(marker);
               // }

            }
            else if (google.maps.geometry.poly.containsLocation(boatLatLongASInput, LatLonForFunctionYuCreated) == false) {


                //       alert("You are within two borders :- " + x);

                /*==========================find the shortest length and put it into a array===============================*/

                for (i = 0; i < SLOuterBorder.length; i++) {
                    var SLorderLatLng = new google.maps.LatLng(SLOuterBorder[i]);
                    All_Distencec[i] = google.maps.geometry.spherical.computeDistanceBetween(SLorderLatLng, boatLatLongASInput);
                }

                /*==========================return the minimum value in array===============================*/
                Array.prototype.min = function () {
                    return Math.min.apply(null, this);
                };

                //  alert(All_Distencec[0] + "\n" + All_Distencec[1] + "\n" + All_Distencec[2] + "\n" + All_Distencec[3]);
              //  alert("you have : " + All_Distencec.min() + " 'meeters' distance with Srilanken Fishing Border");

                /*=========================massage alert box==================================*/

                var contentString = '<div id="content" style="background: #FFFF99; " >' +
                    '<div id="siteNotice" >' +
                    '</div>' +
                    '<h4 id="firstHeading" class="firstHeading">Going to cross the Border</h4>' +
                    '<div id="bodyContent">' +
                    "This boat have:<b> " + All_Distencec.min() + "</b> m <br>distance with Srilanken Fishing Border." +

                    '<p>About the Boat, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
                    'click here</a> ' +
                    '</div>' +
                    '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                });



                /*============this will show wher is the boart====================================*/

              //  for (var i = 0; i < google_path.length; i++) {

                    var marker = new google.maps.Marker({
                        position: google_path[0],
                        map: map,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            fillColor: "#FFFF4D",
                            fillOpacity: 1,
                            strokeColor: '#FFFF4D',
                            strokeWeight: .5,
                            scale: 5
                        }
                    });

                    marker.addListener('click', function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);  // you will coment this

                markersAry.push(marker);
              //  }

            }


        }/* end of outer if*/
        else if (google.maps.geometry.poly.containsLocation(boatLatLongASInput, SLLatLonForFunction) == false) {

            // alert("you have cross the Sri lanken border:- " + y);

            /*==========================find the shortest length and put it into a array===============================*/

            for (i = 0; i < SLOuterBorder.length; i++) {
                var SLorderLatLng = new google.maps.LatLng(SLOuterBorder[i]);
                All_Distencec[i] = google.maps.geometry.spherical.computeDistanceBetween(SLorderLatLng, boatLatLongASInput);
            }

            /*==========================return the minimum value in array===============================*/

            Array.prototype.min = function () {
                return Math.min.apply(null, this);
            };

            //  alert(All_Distencec[0]+"\n"+ All_Distencec[1]+ "\n" + All_Distencec[2]+"\n" + All_Distencec[3] );
            //  alert("you have pass the Srilanken border : "+ All_Distencec.min()+ "  meeters......!!!, Please go to the Srilanken Fishing area. ");


            /*=========================massage alert box==================================*/

            var contentString = '<div id="content" style="background: #FF7373; " >' +
                '<div id="siteNotice" >' +
                '</div>' +
                '<h4 id="firstHeading" class="firstHeading">Boat has crossed the Border</h4>' +
                '<div id="bodyContent">' +
                "you have pass the Srilanken border<b> " + All_Distencec.min() + "</b> m...!! <br> Please go to the Srilanken Fishing area." +

                '<p>About the Boat, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
                'click here</a> ' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString,
            });



            /*============this will show wher is the boart====================================*/

        //    for (var i = 0; i < google_path.length; i++) {

                var marker = new google.maps.Marker({
                    position: google_path[0],
                    map: map,
                    icon: {
                        path: google.maps.SymbolPath.CIRCLE,
                        fillColor: "#D90000",
                        fillOpacity: 1,
                        strokeColor: '#D90000',
                        strokeWeight: .5,
                        scale: 5
                    }
                });

                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);  // you will coment this

            markersAry.push(marker);
           // }
        }
    }

    /*==============================================End of  notification function==============================*/


    /*===========================================this function will load the map=========================*/









    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 7.742291, lng: 80.529785},
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });

        var ctaLayer = new google.maps.KmlLayer({
            url: 'https://sites.google.com/site/boattrackertest/home/slbordertest/SLBorder15.kml',
            //  url: 'https://sites.google.com/site/slborderfinal/home/slborderl/SLborderL.kml',
            map: map
        });



/*================ this function will repeat the notificatioFunction function and this is the ajax call=============*/


        var myVar = setInterval(function(){ myFunction() }, 8000);


              function myFunction() {
                  $(document).ready(function () {

                      /*=============================this ajax call for get table name from db==================== */


                      $.ajax({

                          url: 'bahuTable.php',
                          dataType: 'JSON',

                          success: function (tableNamesResponse) {

                             // alert(tableNamesResponse.length);



                              var i;
                              for (i = 0; i < tableNamesResponse.length; i++) {  // this for loop help to call notificatioFunction() functon
                                                                                // for each boat table

                                  /*============================  this ajax call for get boat's lat long from db  ==================== */

                                  $.ajax({
                                      type: 'POST',
                                      url: 'data_retrive_tmptable_forBorder.php',
                                      dataType: 'JSON',
                                      data: {postingData: tableNamesResponse[i]},

                                      success: function (BoatLatLogResponse) {
                                       //   alert("bat LatLong request :-" + BoatLatLogResponse);

                                          var boatLatLongASInputsShow = new google.maps.LatLng(BoatLatLogResponse[0]);

                                          /*=============one of main function, this conditions change the marker's possition============*/

                                          if (markersAry.length == 0) {

                                               ///alert("0  :- "+ markersAry.length);
                                              notificatioFunction(boatLatLongASInputsShow, BoatLatLogResponse, map);
                                          }
                                         /* else if (markersAry.length == 1) {
                                                alert("1  :- "+ markersAry.length);
                                              markersAry[0].setMap(null);
                                              notificatioFunction(boatLatLongASInputsShow, BoatLatLogResponse, map);
                                          }*/
                                          else if (markersAry.length > 0) {
                                             ///  alert("2>  :- "+ markersAry.length);
                                              for (var t = 0 ; t < markersAry.length - (tableNamesResponse.length - 1) ; t++) {
                                                  markersAry[t].setMap(null);  /// one of most impotrent code in this
                                              }
                                              notificatioFunction(boatLatLongASInputsShow, BoatLatLogResponse, map);
                                          }

                                      },
                                      error: function () {
                                          alert('failure...! marker"s possition');
                                      }

                                  });   //   end of boat notificatioFunction ajax call


                              }// end of for loop



                          },  //   end of get table name ajax call's,  success: function (tableNamesResponse)
                          error: function () {
                              alert('failure...! table name ajax call ');
                          }



                  });   //   end of get table name ajax call


                  }); // end of document rady function
              }  // end of map function




    }   // end of function initMap()




</script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARnFe4AZyyckFaM8JCyuOx0rF8oDs9nKs&callback=initMap" async defer></script>


<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvWP2ZYJ1gikl5mQ6SUMVU2-5wIS3H2bU&libraries=geometry&callback=initMap" async defer></script>
-->
<!--<button type="button" id="btn" > Click Me </button> -->


</body>
</html>