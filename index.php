<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Universe</title>
    <link type="text/css" rel="stylesheet" href="/universe/styles/main.css">
    <link rel="shortcut icon" href="/universe/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="fullSizeImg">
    <div class="closeImg"><span style="cursor: pointer;">X</span></div>
    <div class="imgBox"><img src="" width="100%" class="largeImg" /></div>
    <div class="imgDesc"></div>
</div>
<div class="planetContainer" id="planetContainer">
    <div id="pHeader" class="planetHeader">
        <div id="navShowBtn">
            <div class="line3" id="upperL"></div>
            <div class="line3" id="middleL"></div>
            <div class="line3" id="lowerL"></div>
        </div>
        <div id="navCloseBtn">
                    <div class="line2" id="line2Upper"></div>
                    <div class="line2" id="line2Lower"></div>
        </div>
        <div id="homeBtn"><a href="/universe">HOME</a></div>
<!--        <div id="searchBtn">-->
<!--            <form>-->
<!--                <label for="searchField">SEARCH:</label>-->
<!--                <input type="text" name="searchField" id="searchField" placeholder="">-->
<!--            </form>-->
<!--        </div>-->
        <div class="pHeaderTitle">Universe</div>
    </div>

    <div class="boxContainer">
         <div class="sideNavigation">
             <div class="navMiddle">
                <ul class="planetNavigation" id="planetNavigation">
                    <?php
                        $data1 = mysqli_connect("localhost", "Misha", "qwe1asd2zxc3", "universe");
                        if (mysqli_connect_errno())
                        {
                            echo "ERROR".mysqli_connect_error();
                        }
                        mysqli_query($data1, "SET NAMES utf8");
                        $result1 = mysqli_query($data1, "SELECT * FROM u_planets ORDER BY id ASC" );
                        while($arr1 = mysqli_fetch_array($result1))
                            {
                                $id1 = $arr1['id'];
                                $u_pname1 = $arr1['u_pname'];
                                $u_pdescription1 = $arr1['u_pdescription'];
                                echo "<li><input type='radio' name='navigation1' value='".$id1."' id='navigation1_".$id1."' class='navigation1'><label for='navigation1_".$id1."' class='radioNav activePButton'>".$u_pname1."</label></li>";
                            }
                        mysqli_free_result($result1);
                        mysqli_close($data1);
                    ?>
                </ul>
             </div>
         </div>
        <div id="planetBox0">
            <div class="mBoxImg"><img src="/universe/photo/s3.png" class="solarSystem" /></div>
            <div class="mBoxText">
                 The Solar System comprises the Sun and the objects that orbit it, either directly or indirectly.
                 Of those objects that orbit the Sun directly, the largest eight are the planets that form the
                 planetary system around it, while the remainder are significantly smaller objects, such as dwarf
                 planets and small Solar System bodies such as comets and asteroids. Of those that orbit the Sun
                 indirectly, two are larger than the smallest planet.
                 <p>The Solar System formed 4.6 billion years ago from the gravitational collapse of a giant interstellar
                 molecular cloud. The vast majority of the system's mass is in the Sun, with most of the remaining mass
                 contained in Jupiter. The four smaller inner planets, Mercury, Venus, Earth and Mars, are terrestrial
                 planets, being primarily composed of rock and metal. The four outer planets are giant planets, being
                 substantially more massive than the terrestrials. The two largest, Jupiter and Saturn, are gas giants,
                 being composed mainly of hydrogen and helium; the two outermost planets, Uranus and Neptune,
                 are ice giants, being composed largely of substances with relatively high melting points compared with
                 hydrogen and helium, called ices, such as water, ammonia and methane. All planets have almost
                 circular orbits that lie within a nearly flat disc called the ecliptic.</p>
                 <p>The Solar System also contains smaller objects. The asteroid belt, which lies between
                 Mars and Jupiter, mostly contains objects composed, like the terrestrial planets, of rock and metal.
                 Beyond Neptune's orbit lie the Kuiper belt and scattered disc, populations of trans-Neptunian objects
                 composed mostly of ices, and beyond them a newly discovered population of sednoids.
                 Within these populations are several dozen to possibly tens of thousands of objects
                 large enough to have been rounded by their own gravity. Such objects are categorized as dwarf planets.
                 Identified dwarf planets include the asteroid Ceres and the trans-Neptunian objects Pluto and Eris.
                 In addition to these two regions, various other small-body populations, including comets, centaurs
                 and interplanetary dust, freely travel between regions. Six of the planets, at least three of the
                 dwarf planets, and many of the smaller bodies are orbited by natural satellites, usually termed "moons"
                 after Earth's Moon. Each of the outer planets is encircled by planetary rings of
                 dust and other small objects.</p>
                 <p>The solar wind, plasma flowing outwards from the Sun, creates a bubble in the interstellar medium
                 known as the heliosphere. The heliopause is the point at which pressure from the solar wind is equal
                 to the opposing pressure of interstellar wind; it extends out to the edge of the scattered disc.
                 The Oort cloud, which is believed to be the source for long-period comets, may also exist at a
                 distance roughly a thousand times further than the heliosphere. The Solar System is located in the
                 Orion Arm, 26,000 light-years from the center of the Milky Way.</p>
            </div>
        </div>
        <?php
            $data2 = mysqli_connect("localhost", "Misha", "qwe1asd2zxc3", "universe");
            if (mysqli_connect_errno())
            {
                echo "ERROR".mysqli_connect_error();
            }
            mysqli_query($data2, "SET NAMES utf8");
            $result2 = mysqli_query($data2, "SELECT * FROM u_planets ORDER BY id ASC" );
            while($arr2 = mysqli_fetch_array($result2))
            {
                $id2 = $arr2['id'];
                $u_pname2 = $arr2['u_pname'];
                $u_pdescription2 = $arr2['u_pdescription'];
                $u_paorbspeed = $arr2['u_paorbspeed'];
                $u_pmradius = $arr2['u_pmradius'];
                $u_peradius = $arr2['u_peradius'];
                $u_ppradius = $arr2['u_ppradius'];
                $u_psarea = $arr2['u_psarea'];
                $u_pvolume = $arr2['u_pvolume'];
                $u_pmass = $arr2['u_pmass'];
                $u_pmdenisty = $arr2['u_pmdenisty'];
                $_psgravity = $arr2['u_psgravity'];
                $u_pevelocity = $arr2['u_pevelocity'];
                $u_psrotperiod = $arr2['u_psrotperiod'];
                $u_pervelocity = $arr2['u_pervelocity'];
                $u_ptemp = $arr2['u_ptemp'];
                $u_patilt = $arr2['u_patilt'];
                $u_palbedo = $arr2['u_palbedo'];
                $u_pamagnitude = $arr2['u_pamagnitude'];
                $u_padiameter = $arr2['u_padiameter'];
                $u_poperiod = $arr2['u_poperiod'];
                $u_pmanomaly = $arr2['u_pmanomaly'];
                $u_peccentricity = $arr2['u_peccentricity'];
                $u_psperiod = $arr2['u_psperiod'];
                $u_plamode = $arr2['u_plamode'];
                $u_pargp = $arr2['u_pargp'];
                $u_pspressure = $arr2['u_pspressure'];
                $u_pimages = $arr2['u_pimages'];
                $u_pimgdesc = $arr2['u_pimgdesc'];
                echo "<div class='planet' id='planetBox".$id2."'>
                           <div class='planetInfo' id='planetInfo".$id2."'>
                                <input type='radio' name='planetTab' class='planetInfoInput' id='pTab1".$id2."' checked
                                ><label for='pTab1".$id2."' class='planetInfoLabel'>Information</label
                                ><input type='radio' name='planetTab' class='planetInfoInput' id='pTab2".$id2."'
                                ><label for='pTab2".$id2."' class='planetInfoLabel'>Satellites</label
                                ><input type='radio' name='planetTab' class='planetInfoInput' id='pTab3".$id2."'
                                ><label for='pTab3".$id2."' class='planetInfoLabel'>Characteristics</label
                                ><input type='radio' name='planetTab' class='planetInfoInput' id='pTab4".$id2."'
                                ><label for='pTab4".$id2."' class='planetInfoLabel'>Images</label>
                                <div class='planetInfoDiv'><img src='/universe/photo/planets/".$u_pname2.".png' width='100%' alt='".$u_pname2."'/>".$u_pdescription2."</div>
                                <div class='planetInfoDiv'>
                                    <div class='planetSTitleContainer'>
                                        <table class='planetTable'>
                                            <tr>
                                                <th class='planetSTitle'>Name</th>
                                                <th class='planetSTitle'>Radius (km)</th>
                                                <th class='planetSTitle'>Average Temperature (K)</th>
                                                <th class='planetSTitle'>Mass (kg)</th>
                                                <th class='planetSTitle'>Discovery Year</th>
                                                <th class='planetSTitle'>Surface Gravity (m/s<sup>2</sup>)</th>
                                                <th class='planetSTitle'>Escape Velocity (km/s)</th>
                                            </tr>
                                        </table>
                                    </div>";
                                $satellites = mysqli_query($data2, "SELECT * FROM u_satellites WHERE u_pname_s = '$u_pname2' ORDER BY u_satelliteradius DESC");
                                    while($satellitesArr = mysqli_fetch_array($satellites))
                                    {
                                        $idS = $satellitesArr['id'];
                                        $u_satelliteName = $satellitesArr['u_satellitename'];
                                        $u_satelliteRadius = $satellitesArr['u_satelliteradius'];
                                        $u_satelliteTemp = $satellitesArr['u_satellitetemp'];
                                        $u_satelliteMass = $satellitesArr['u_satellitemass'];
                                        $u_satelliteYear = $satellitesArr['u_satelliteyear'];
                                        $u_satelliteGravity = $satellitesArr['u_satellitesgravity'];
                                        $u_satelliteVelocity = $satellitesArr['u_satelliteevelocity'];
                                        $u_satelliteDesc = $satellitesArr['u_satellitedesc'];
                                        echo "<div class='planetSContainer'>
                                                  <div class='planetS' id='planetS1'>".$u_satelliteName."</div>
                                                  <div class='planetS' id='planetS2'>".$u_satelliteRadius."</div>
                                                  <div class='planetS' id='planetS3'>".$u_satelliteTemp."</div>
                                                  <div class='planetS' id='planetS4'>".$u_satelliteMass."</div>
                                                  <div class='planetS' id='planetS5'>".$u_satelliteYear."</div>
                                                  <div class='planetS' id='planetS6'>".$u_satelliteGravity."</div>
                                                  <div class='planetS' id='planetS7'>".$u_satelliteVelocity."</div>
                                              </div>
                                              <div class='planetSDesc'>
                                                  <div><img src='/universe/photo/satellites/".$u_satelliteName.".png' width='100%' class='satelliteImg' alt='".$u_satelliteName."'/></div>
                                                  ".$u_satelliteDesc."
                                              </div>";
                                    }
                                    mysqli_free_result($satellites);
                                echo "</div>
                                <div class='planetInfoDiv'>
                                    <div class='planetInfoContainer'>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Mean Radius (km)</th>
                                                <th class='planetITitle'>Equatorial Radius (km)</th>
                                                <th class='planetITitle'>Polar Radius (km)</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_pmradius."</div>
                                            <div class='planetI'>".$u_peradius."</div>
                                            <div class='planetI'>".$u_ppradius."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Average Orbital Speed (km/s)</th>
                                                <th class='planetITitle'>Surface Area (km<sup>2</sup>)</th>
                                                <th class='planetITitle'>Volume (km<sup>3</sup>)</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_paorbspeed."</div>
                                            <div class='planetI'>".$u_psarea."</div>
                                            <div class='planetI'>".$u_pvolume."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Mass (kg)</th>
                                                <th class='planetITitle'>Mean Denisty (g/cm<sup>3</sup>)</th>
                                                <th class='planetITitle'>Surface Gravity (m/s<sup>2</sup>)</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_pmass."</div>
                                            <div class='planetI'>".$u_pmdenisty."</div>
                                            <div class='planetI'>".$_psgravity."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Escape Velocity (km/s)</th>
                                                <th class='planetITitle'>Sidereal Rotation Period</th>
                                                <th class='planetITitle'>Equatorial Rotation Velocity</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_pevelocity."</div>
                                            <div class='planetI'>".$u_psrotperiod."</div>
                                            <div class='planetI'>".$u_pervelocity."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Mean Temperature (K)</th>
                                                <th class='planetITitle'>Axial Tilt</th>
                                                <th class='planetITitle'>Albedo</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_ptemp."</div>
                                            <div class='planetI'>".$u_patilt."</div>
                                            <div class='planetI'>".$u_palbedo."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Apparent Magnitude</th>
                                                <th class='planetITitle'>Angular Diameter</th>
                                                <th class='planetITitle'>Orbital Period</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_pamagnitude."</div>
                                            <div class='planetI'>".$u_padiameter."</div>
                                            <div class='planetI'>".$u_poperiod."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Mean Anomaly</th>
                                                <th class='planetITitle'>Eccentricity</th>
                                                <th class='planetITitle'>Synodic Period</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_pmanomaly."</div>
                                            <div class='planetI'>".$u_peccentricity."</div>
                                            <div class='planetI'>".$u_psperiod."</div>
                                        </div>
                                        <div class='contThreeTitle'>
                                        <table class='pTable'>
                                            <tr>
                                                <th class='planetITitle'>Longitude of Ascending Mode</th>
                                                <th class='planetITitle'>Argument of Perihelion</th>
                                                <th class='planetITitle'>Surface Pressure</th>
                                            </tr>
                                        </table>
                                        </div>
                                        <div class='contThree'>
                                            <div class='planetI'>".$u_plamode."</div>
                                            <div class='planetI'>".$u_pargp."</div>
                                            <div class='planetI'>".$u_pspressure."</div>
                                        </div>
                                    </div>
                                </div>
                                <div class='planetInfoDiv'>";
                                    $imgDesc = explode(",", $u_pimgdesc);
                                    $images = explode(",", $u_pimages);
                                    $i = 0;
                                    while ($i < count($images))
                                    {
                                        echo "<img src='".$images[$i]."' alt='".$imgDesc[$i]."' width='20%' class='smallImg'/>";
                                        $i++;
                                    }
                                echo "</div>
                           </div>
                           <div class='planetAnchorShow' id='planetAnchorShow".$id2."'><span class='moveLeft'>&lt</span></div>
                           <div class='planetAnchorClose' id='planetAnchorClose".$id2."'><span class='moveRight'>&gt</span></div>
                      </div>";
            }
            mysqli_free_result($result2);
            mysqli_close($data2);
        ?>
    </div>
</div>
<script src="/universe/js/jquery-1.11.3.js"></script>
<script src="/universe/js/scripts.js"></script>
</body>
</html>