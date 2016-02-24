<?php
namespace MT;

class PHP64 extends MT19937PHP_64 {}
class PHP32 extends MT19937PHP_32 {}

class MT19937PHPTest extends \PHPUnit_Framework_TestCase
{
    function implementationProvider()
    {
        $impl = [[new PHP32]];
        if (PHP_INT_SIZE > 4) {
            $impl[] = [new PHP64];
        }
        return $impl;
    }

    /**
     * @dataProvider implementationProvider
     */
    function testOutput(PRNG $mt)
    {
        $expected = [
            1614640687, 1711027313,  857485497,  688176834, 1386682158,  412773096,  813703253,  898651287,
            2087374214, 1382556330, 1640700129, 1863374167, 1324097651, 1923803667,  676334965,  853386222,
            1802470719,  689771423,  504637174, 1333750642, 1663693349, 2043136441,  136239837, 1231272838,
            1673842702, 1636867766,  589950989, 2051941741,  416909991,  713302049, 1098355576,  460944625,
            2005236878,  878412611, 1295560984,  742484214,   48412133,   67161823, 1481427072, 1815305080,
             459067123,  650628317,  557919502,  470011788, 1800174533,  843743539, 1893447366, 1687675167,
            1863671194,  938084203,  948859424, 2094335405, 1796736152, 1156830868,  567538620,  224230491,
             467208430,  699869700,  673244205, 1727674634,  174267473,  305240476, 1664492591,  126921729,
            1229830284, 1242714232, 1353467501, 1466462550, 2130518089, 1508391469, 1592293045, 1758718890,
            1567696910, 1461358922,  443619879, 1796866033, 1455814609, 1216700526,  594081355,  268667831,
             264069704, 1705186559, 1262287360,  306266427,  112809230, 1378829767,  513459392,  263457822,
            2114377901,  935064713, 2099405085, 1924805097,  724605585,  265576846, 1466356449,  158003498,
            1505012396, 1604437251,  652228678, 1601622137, 1363080848,   41511539, 1620451880, 1781756221,
            1180288922, 2119131564, 1557665507,   29433392,  708273398,  342128402, 1984986828, 1733092982,
             616682799,  343653020, 1345664408,  868164676, 1646015005, 1671205111, 1489673388, 1425207279,
             973673789,  717633954,  630425247, 1429450211,  601800419,  759577256, 1872346058, 2045978553,
            1033461860,  946529511,  517592175, 1789895382, 1098613904,   88020350, 1961931626,  898399705,
            2082512190,  171161413,   26770723,  703506099,  824275968, 2127004670,  376914207, 1590748539,
              97539869, 1695864623, 1650240484,  463619238, 1570661700,  381108205,  183117220,  845736699,
            1459649878,  693315812, 1135308046, 1507032370, 1920546729,  387850234, 1981623082, 1008966211,
            2041041307, 2117335942, 1332650224,  516330496,  472140366,  415857671,  211025019, 1249460021,
             346598181, 1180264103,  270071319, 1505716747,  444739496,  119961579, 1528090664,  267761986,
            1697390935,   59645303,  831707102, 1332368793,  848189375, 1938668590, 1571754511,  497898760,
             507754143, 1614300034, 1580628989, 1373143302, 1499681282, 1445696202, 1506951086, 2006841347,
            1694334644, 1560861317,  753057260,  804333400,  308999809,  320738668, 1161853926,  464242274,
            1307905490, 1622418528, 1363178419,  625008507,  168494358,  645244302,  316118879, 1339247938,
            1277251004, 1397623858,  702823406,  337002496,  475034114,  771792259,  244253878,  105676500,
            1249522265, 1831117427, 1445543713, 2029503161, 1596130657, 1101571984, 1452879798,  218684823,
            1377813888,  173678688,   34838184,  384296516, 1924767994, 1541463273, 1610997554, 1995074354,
            1644235313,  995699931, 1012445880, 1314877749, 1086611421, 1068887389, 1422005454,  566331009,
            2017833579,  330534389,  506136487, 1452555035, 1282353142,  882580313,  627574546, 1538891704,
            2081509451,  388097984, 1316311462,  593712657, 1467879852,  138975599, 1808336332, 1872963827,
             987330438,  807545571,  272429201, 1890047621,  389335953, 1188313126,   23849460,  833996555,
              31604506, 1847351943, 1293391743, 1208938604, 1448594629, 1039668596, 1430372076,  321272195,
             900228424,  869957023, 2006650614,  890766821,   93721779,  685654065, 1326617779,  844135822,
            1845681628, 1015329120, 1838174025,  697572124, 1063796802, 1417515671,  462235451,  940471726,
            1563549909, 1800690839, 1599964992, 2131039219,  364648470,  212037407, 1967867791, 2006528716,
            1034299359,  741675593, 1544332416, 1334147905, 1267109022,  443405394,  252133634,  831746346,
             921851788, 1145517466,  450531962,  502706881,  338797238,  419407892, 1056967445, 1646606582,
            2020468498,  912931943,  548957227, 1894530621, 1230289612, 2081099801, 1301367456,  682967548,
            2021585534, 1226304550,  770893463,  461911801,  693380112, 1632363896,  836178962,  132603865,
            1253240076,  958889006, 1965399186, 1066958497,  153664578, 1127077675, 1974798408,  850623061,
            1328884359, 1274515511, 1240196555,  442111061,  399430972,  729827071, 1567698327,  306859338,
            2099624379,  853837040,  846981758, 1731023158,  746376185, 1356080603,  674417379, 1663017531,
            1138087037, 1444026119, 1926130200,  972607249, 1569396623, 1152642001,  515645830,  540876562,
             282007051,  493387445,  343750943, 1606987675,   77978573, 1392096592, 1197577544, 1168909380,
             910598282,  564550544, 1982948033,  242141616,  527351045,  707445496,  283959773,  378891428,
            1725814192,   59650317,  386453463, 1352024247,  247197317,  656575290,  982243007,  419489608,
              58963537, 1538976123,  712742643, 2043148371, 1917471214,  280130373, 2016490133, 1163644694,
             163175076, 2107369353,  773816714,  891763867,   78347179, 2146841656, 2105236380, 1775926747,
            1875189970, 2080861375,  293126768,  644645952, 1177717979, 2135040628,  268873556, 1959075512,
            1870069224, 1295026463,  416328262,  513699085,  105577533,  970269604,   62624466, 1797260924,
            1597592905, 2084000368,  123772517,  581449272, 1269853017, 1013385498, 1650332483,   79832429,
            1049942521,   84654321,  674261760, 1055655997, 1991071841, 1156925601, 1691609579,  681838361,
             727498714, 1270701199,  179958484,  996451063, 1462082818, 1354747698, 1223704739,  771051664,
            1409716306, 1459457334,  179256475, 1692745070,  959113727, 1399126232, 1607553979, 1688321478,
            1114925174,  972949268, 1820833150,  860494239,  324945341, 1194959637,  479957538, 1133865836,
             332264512,  285192865, 1002552117,  884484438,  694985792, 1599923347, 1815560194, 1430382619,
             878933358,  437561312, 1619291763,  190474391, 1824228386,  159328214, 1248311618, 1532066922,
            1009511555,  881691468,  553235034,  588288498,  991599182, 1124748039,  255876325, 1840168899,
             263233737,  141918330, 1712978812,  413505676, 1433996446, 2014760132,  487340864, 1626277384,
            1185944040,  682932130, 1906400855, 2022481237,  655946359, 2042686144, 2044268167, 1009200250,
            1507003798,  752083856, 1122241099, 1644396593, 1057769034,  276354105, 1529402502, 1264585233,
             380554135,  820253522, 1446502961, 1735481027, 1527669606, 2021799885, 1100406158, 2006590373,
             517522207, 1696327006, 1317861146, 1280532833,  953907940,   32375089,  219503140,  614146460,
             518363323, 2070040463, 1774078703, 1050965533, 2084895806, 1414027344, 1635352086,  538901381,
             830359149, 2069119669, 2146415008, 1399394838, 1286818877, 1900719346,  818505208,   14784588,
             761285050, 2012870148, 1622239385, 1384641903,  809082750, 1800002280,  443006014, 1685978517,
             464327016,  228904287,  401901912,  506290432, 2126741003, 2001023840,   53960454,  473738010,
            1873758430, 1684609958,  662683145,  817306971, 1531246327,  431808180,  626937054,  845121793,
            1565043137, 1813346943,  686294795,  915293708, 1537384547,  509323807, 1337612990, 1027665244,
            1928329972,   98831537, 2005325916, 2030776296, 1715442698,  194552106, 1887955132, 1736728940,
             156569834, 1635612957,  333350371, 1456114707, 1311797003,  302015404,  928037218,  641065981,
            1082938797, 1026852794, 1737303388, 1428899611, 2103214969, 1719931440,  487183859, 1594770973,
            1464577379, 1967830359, 1147152394,  341386845, 1614801109, 1511957812, 1795785429, 1245240328,
            2137540696, 1985009580,  604918239,  881017849,  602191855,  418729613,  588637341,  150273618,
            1340054632, 1846689341, 1844286261, 1745889493,  635833856, 1069360694, 1595522686, 1283033068,
            1645569061,  489923429, 1342641534,  922379507, 1101460110, 1310415989,  117519361,  275042728,
             323506612, 1693371750,  498757862, 1119477802, 2106462910, 1917725251, 2043410708,   68539164,
            1219809845, 1896321949,  335070462, 1800744320, 2031692685,  520772324,  118471333,  476313537,
             856005628,  901966257, 2112456184, 1917256065, 1641309768, 1609384587, 1599032110, 1190965941,
             678756723, 1935782155,  737910268, 1611742320, 1749128931, 1743761701, 1306905996, 1422557195,
            1445826397, 1955644148, 1246496496,  613605607, 1385597930,  287453083, 1211171352, 1008724958,
             219357423,  403132593, 1907003873,  914343491,  666244432, 1532050200, 1585205621, 2055218782,
            1915867525, 1390675091,  298512724, 1168644746,   81318313, 1441762884, 2025567973,  574235212,
             542362175,  285017293, 1709985416,    8867254,  678010024,  273356582, 1057927085, 1026872025,
             106687916, 1051068321,  804185846, 1346916127, 1133693422,  206489350, 1579600163, 1826000656,
             205171813,  603154718,  597695501, 1330049996,  191518166,  100462643,   11995268, 1765578452,
            1987415799,  326405487,  775310740,  159308206,  946588767,  403961705,  897700472,  250180588,
            1441552717, 1383856499,  303009011,  932336590, 1248858318, 1459960418, 1974594434,  707814809,
            1735831288, 1870419925, 1363580500,  175038166,  285570035, 1120333697,  481160358, 1177832326,
            1705568434, 1861549435,  609849087, 1305932980, 1135562433,  756669270,  833482338, 1276452431,
             133322576,  425754425, 1692726091, 1218158534, 1788496914, 1407648687,  130371721, 1950173890,
             975798953, 2145699105,   52671553, 1590443295, 1127779713,  251622317, 1080176554, 1801051864,
             894638856,  221532173,  544527173, 1142694866,  249639716, 1837786802, 1387893919,    7108661,
            1450157883,  677885877,  306577925, 1001579050, 1701690982,  798786327,  386057485, 1177639212,
             877146269,  191982882,  681991428, 1590862278, 1466739785, 1833826429,  888928833, 1305997861,
            1097558295,  958650225, 1826257060, 1832172423,  311160804,  605949895, 1956294321, 1893640040,
            1488278743, 1112512111, 1301603147, 1312088569, 1787677315, 1262646926,   89482959,  211458798,
            1237971623,  142747160, 1712437022,  711131351,  976046678,  459301079,  861185092, 1331723991,
            2144765651,  467153206,  537973576, 1443114160, 1212252500,  416812464, 1534897839,  825278504,
            1586134856, 1242396297, 1732289816,  209347101,  880563784,  129328571, 2041091817, 1620213675,
            1932378489, 1961210050, 1572333761,  126073880, 1818431752,  408463071,  576383385,  585443184,
             942689117,  889986661,  455293371, 1772419585, 1150261746,  183550897, 2096150682, 1089128146,
            1273654906, 2114499925,  591840860,  753281677, 1572337941,  353169475, 1293917909,  128474292,
            1953107066, 2099278817,  249252134, 1260988378,  439860573, 1963427126,  777206259, 1305840113,
              56957013,   96724359,  611652370, 1682544254, 1092793725, 1263077891, 1368655649,   11096683,
            1531402723, 1072176331,   27861254,  903200955, 1204206065, 1703372574, 2013997291,  514818137,
            1114797554, 1199317231, 1449768504,  813875631, 1735715043, 1304599766, 1644740381,  935286421,
            1248616011, 1783137046, 1550435216, 2025611548, 1673010247, 1063033290,  778947110,  528034709,
            1032250542, 1873011542,  243315563,   50008514,  248933484, 1050887580, 1708091175,  997332642,
            1517549419,  704206583, 1635122647,  884157611, 1257626536,   79722341,  855329607, 1194937190,
              52039678, 2101231241, 1998625159,  825005453, 1687665836,  112841079, 1842693180, 2035465189,
             790159257,  793547630, 2110661453, 1496526639, 2135360611,  104794644, 1706967918, 1913280444,
            1281930127, 1179438422,  405810053, 1816061897, 1128384679, 1210676233, 1162037096, 1749380064,
            1585471287,  307222972,  168026193, 1094872772,  446934094, 1116270434,  323537128, 1485533206,
            1068813860, 1828884747, 1762068640,  681763871, 2053692125,  365207526,  362467432, 1663509576,
            1683956832,   98888739,  924843058,  157297730, 1885211187,  151721680, 1307522653, 1483373112,
             212382204,  539023479, 1452875514,  212748776, 1791088683,  567905952, 1673819020,  436395110,
             679100025, 2001309778,   35067977,  451956964, 1206703689,  937822402, 1323856199, 1982375713,
             440182138, 1713712152, 2105846666, 1870163281,  765444841, 1948698878,   91710677, 1758802776,
            1806654425,  582587046,  235025655,  651995107, 1481868319,  492016622, 1079124802, 1342523658,
            1780294064, 1128185576,  255907597,  618706290,  369591775,  382610715, 2036969825, 2047558566,
            2073617665,  508434850, 1337343383, 1156675310, 1053677672,  674491088,  458193474,  375485160,
            1906735521, 2100988129, 1320203481,  983708268, 2028247390,  580550492, 1622143037, 1148968559,
            1553221212, 1036487012, 1287820813, 1023860989, 2133736203,  350592197, 1441349040,  358671234,
            1030898230, 2115211969, 1009460576,  374380916,   54114278,   40321211,  601363842, 1196975511,
            1487330916, 1853833671,  898781793, 2086953676, 1913059263,  149794400,   53809940, 2061546928
        ];

        $mt->init(12345678);
        for ($i = 0; $i < 1024; $i++) {
            $this->assertSame($expected[$i], $mt->int31());
        }
    }
}
