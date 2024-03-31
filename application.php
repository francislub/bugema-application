<!DOCTYPE html>

<!--=== Coding by CodingLab | www.codinglabweb.com === -->

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <!----======== CSS ======== -->

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="logo.png" type="image/png">

     

    <!----===== Iconscout CSS ===== -->

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.js"></script>





    <title>BU | Application Form </title> 

</head>

<body>

    <div class="container">

        <header>

            Application Form

        </header>



        <form method="POST" action="db.php" enctype="multipart/form-data">

            <div class="form first">

                <div class="details personal">

                    <span class="title">Personal Details</span>



                    <div class="fields">

                        <div class="input-field">

                            <label>Full Name</label>

                            <input type="text" placeholder="Enter your name" name="full_name" required>

                        </div>



                        <div class="input-field">

                            <label>Date of Birth</label>

                            <input type="date" placeholder="Enter birth date" name="date_of_birth" required>

                        </div>



                        <div class="input-field">

                            <label>Email</label>

                            <input type="text" placeholder="Enter your email" name="email" required>

                        </div>



                        <div class="input-field">

                            <label>Gender</label>

                            <select name="gender" required>

                                <option disabled selected>Select gender</option>

                                <option>Male</option>

                                <option>Female</option>

                                <option>Others</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>Country</label>

                            <select name="country" id="countrySelect" style="width: 260px;" required>

                                <option disabled selected>Select Country</option>

                                <option value="Afghanistan">Afghanistan</option>

                                <option value="Åland Islands">Åland Islands</option>

                                <option value="Albania">Albania</option>

                                <option value="Algeria">Algeria</option>

                                <option value="American Samoa">American Samoa</option>

                                <option value="Andorra">Andorra</option>

                                <option value="Angola">Angola</option>

                                <option value="Anguilla">Anguilla</option>

                                <option value="Antarctica">Antarctica</option>

                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>

                                <option value="Argentina">Argentina</option>

                                <option value="Armenia">Armenia</option>

                                <option value="Aruba">Aruba</option>

                                <option value="Australia">Australia</option>

                                <option value="Austria">Austria</option>

                                <option value="Azerbaijan">Azerbaijan</option>

                                <option value="Bahamas">Bahamas</option>

                                <option value="Bahrain">Bahrain</option>

                                <option value="Bangladesh">Bangladesh</option>

                                <option value="Barbados">Barbados</option>

                                <option value="Belarus">Belarus</option>

                                <option value="Belgium">Belgium</option>

                                <option value="Belize">Belize</option>

                                <option value="Benin">Benin</option>

                                <option value="Bermuda">Bermuda</option>

                                <option value="Bhutan">Bhutan</option>

                                <option value="Bolivia">Bolivia</option>

                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>

                                <option value="Botswana">Botswana</option>

                                <option value="Bouvet Island">Bouvet Island</option>

                                <option value="Brazil">Brazil</option>

                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

                                <option value="Brunei Darussalam">Brunei Darussalam</option>

                                <option value="Bulgaria">Bulgaria</option>

                                <option value="Burkina Faso">Burkina Faso</option>

                                <option value="Burundi">Burundi</option>

                                <option value="Cambodia">Cambodia</option>

                                <option value="Cameroon">Cameroon</option>

                                <option value="Canada">Canada</option>

                                <option value="Cape Verde">Cape Verde</option>

                                <option value="Cayman Islands">Cayman Islands</option>

                                <option value="Central African Republic">Central African Republic</option>

                                <option value="Chad">Chad</option>

                                <option value="Chile">Chile</option>

                                <option value="China">China</option>

                                <option value="Christmas Island">Christmas Island</option>

                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>

                                <option value="Colombia">Colombia</option>

                                <option value="Comoros">Comoros</option>

                                <option value="Congo">Congo</option>

                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>

                                <option value="Cook Islands">Cook Islands</option>

                                <option value="Costa Rica">Costa Rica</option>

                                <option value="Cote D'ivoire">Cote D'ivoire</option>

                                <option value="Croatia">Croatia</option>

                                <option value="Cuba">Cuba</option>

                                <option value="Cyprus">Cyprus</option>

                                <option value="Czech Republic">Czech Republic</option>

                                <option value="Denmark">Denmark</option>

                                <option value="Djibouti">Djibouti</option>

                                <option value="Dominica">Dominica</option>

                                <option value="Dominican Republic">Dominican Republic</option>

                                <option value="Ecuador">Ecuador</option>

                                <option value="Egypt">Egypt</option>

                                <option value="El Salvador">El Salvador</option>

                                <option value="Equatorial Guinea">Equatorial Guinea</option>

                                <option value="Eritrea">Eritrea</option>

                                <option value="Estonia">Estonia</option>

                                <option value="Ethiopia">Ethiopia</option>

                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>

                                <option value="Faroe Islands">Faroe Islands</option>

                                <option value="Fiji">Fiji</option>

                                <option value="Finland">Finland</option>

                                <option value="France">France</option>

                                <option value="French Guiana">French Guiana</option>

                                <option value="French Polynesia">French Polynesia</option>

                                <option value="French Southern Territories">French Southern Territories</option>

                                <option value="Gabon">Gabon</option>

                                <option value="Gambia">Gambia</option>

                                <option value="Georgia">Georgia</option>

                                <option value="Germany">Germany</option>

                                <option value="Ghana">Ghana</option>

                                <option value="Gibraltar">Gibraltar</option>

                                <option value="Greece">Greece</option>

                                <option value="Greenland">Greenland</option>

                                <option value="Grenada">Grenada</option>

                                <option value="Guadeloupe">Guadeloupe</option>

                                <option value="Guam">Guam</option>

                                <option value="Guatemala">Guatemala</option>

                                <option value="Guernsey">Guernsey</option>

                                <option value="Guinea">Guinea</option>

                                <option value="Guinea-bissau">Guinea-bissau</option>

                                <option value="Guyana">Guyana</option>

                                <option value="Haiti">Haiti</option>

                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>

                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>

                                <option value="Honduras">Honduras</option>

                                <option value="Hong Kong">Hong Kong</option>

                                <option value="Hungary">Hungary</option>

                                <option value="Iceland">Iceland</option>

                                <option value="India">India</option>

                                <option value="Indonesia">Indonesia</option>

                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>

                                <option value="Iraq">Iraq</option>

                                <option value="Ireland">Ireland</option>

                                <option value="Isle of Man">Isle of Man</option>

                                <option value="Israel">Israel</option>

                                <option value="Italy">Italy</option>

                                <option value="Jamaica">Jamaica</option>

                                <option value="Japan">Japan</option>

                                <option value="Jersey">Jersey</option>

                                <option value="Jordan">Jordan</option>

                                <option value="Kazakhstan">Kazakhstan</option>

                                <option value="Kenya">Kenya</option>

                                <option value="Kiribati">Kiribati</option>

                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>

                                <option value="Korea, Republic of">Korea, Republic of</option>

                                <option value="Kuwait">Kuwait</option>

                                <option value="Kyrgyzstan">Kyrgyzstan</option>

                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>

                                <option value="Latvia">Latvia</option>

                                <option value="Lebanon">Lebanon</option>

                                <option value="Lesotho">Lesotho</option>

                                <option value="Liberia">Liberia</option>

                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

                                <option value="Liechtenstein">Liechtenstein</option>

                                <option value="Lithuania">Lithuania</option>

                                <option value="Luxembourg">Luxembourg</option>

                                <option value="Macao">Macao</option>

                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>

                                <option value="Madagascar">Madagascar</option>

                                <option value="Malawi">Malawi</option>

                                <option value="Malaysia">Malaysia</option>

                                <option value="Maldives">Maldives</option>

                                <option value="Mali">Mali</option>

                                <option value="Malta">Malta</option>

                                <option value="Marshall Islands">Marshall Islands</option>

                                <option value="Martinique">Martinique</option>

                                <option value="Mauritania">Mauritania</option>

                                <option value="Mauritius">Mauritius</option>

                                <option value="Mayotte">Mayotte</option>

                                <option value="Mexico">Mexico</option>

                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>

                                <option value="Moldova, Republic of">Moldova, Republic of</option>

                                <option value="Monaco">Monaco</option>

                                <option value="Mongolia">Mongolia</option>

                                <option value="Montenegro">Montenegro</option>

                                <option value="Montserrat">Montserrat</option>

                                <option value="Morocco">Morocco</option>

                                <option value="Mozambique">Mozambique</option>

                                <option value="Myanmar">Myanmar</option>

                                <option value="Namibia">Namibia</option>

                                <option value="Nauru">Nauru</option>

                                <option value="Nepal">Nepal</option>

                                <option value="Netherlands">Netherlands</option>

                                <option value="Netherlands Antilles">Netherlands Antilles</option>

                                <option value="New Caledonia">New Caledonia</option>

                                <option value="New Zealand">New Zealand</option>

                                <option value="Nicaragua">Nicaragua</option>

                                <option value="Niger">Niger</option>

                                <option value="Nigeria">Nigeria</option>

                                <option value="Niue">Niue</option>

                                <option value="Norfolk Island">Norfolk Island</option>

                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>

                                <option value="Norway">Norway</option>

                                <option value="Oman">Oman</option>

                                <option value="Pakistan">Pakistan</option>

                                <option value="Palau">Palau</option>

                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>

                                <option value="Panama">Panama</option>

                                <option value="Papua New Guinea">Papua New Guinea</option>

                                <option value="Paraguay">Paraguay</option>

                                <option value="Peru">Peru</option>

                                <option value="Philippines">Philippines</option>

                                <option value="Pitcairn">Pitcairn</option>

                                <option value="Poland">Poland</option>

                                <option value="Portugal">Portugal</option>

                                <option value="Puerto Rico">Puerto Rico</option>

                                <option value="Qatar">Qatar</option>

                                <option value="Reunion">Reunion</option>

                                <option value="Romania">Romania</option>

                                <option value="Russian Federation">Russian Federation</option>

                                <option value="Rwanda">Rwanda</option>

                                <option value="Saint Helena">Saint Helena</option>

                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

                                <option value="Saint Lucia">Saint Lucia</option>

                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>

                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>

                                <option value="Samoa">Samoa</option>

                                <option value="San Marino">San Marino</option>

                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>

                                <option value="Saudi Arabia">Saudi Arabia</option>

                                <option value="Senegal">Senegal</option>

                                <option value="Serbia">Serbia</option>

                                <option value="Seychelles">Seychelles</option>

                                <option value="Sierra Leone">Sierra Leone</option>

                                <option value="Singapore">Singapore</option>

                                <option value="Slovakia">Slovakia</option>

                                <option value="Slovenia">Slovenia</option>

                                <option value="Solomon Islands">Solomon Islands</option>

                                <option value="Somalia">Somalia</option>

                                <option value="South Africa">South Africa</option>

                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>

                                <option value="Spain">Spain</option>

                                <option value="Sri Lanka">Sri Lanka</option>

                                <option value="Sudan">Sudan</option>

                                <option value="Suriname">Suriname</option>

                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>

                                <option value="Swaziland">Swaziland</option>

                                <option value="Sweden">Sweden</option>

                                <option value="Switzerland">Switzerland</option>

                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>

                                <option value="Taiwan">Taiwan</option>

                                <option value="Tajikistan">Tajikistan</option>

                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

                                <option value="Thailand">Thailand</option>

                                <option value="Timor-leste">Timor-leste</option>

                                <option value="Togo">Togo</option>

                                <option value="Tokelau">Tokelau</option>

                                <option value="Tonga">Tonga</option>

                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>

                                <option value="Tunisia">Tunisia</option>

                                <option value="Turkey">Turkey</option>

                                <option value="Turkmenistan">Turkmenistan</option>

                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

                                <option value="Tuvalu">Tuvalu</option>

                                <option value="Uganda">Uganda</option>

                                <option value="Ukraine">Ukraine</option>

                                <option value="United Arab Emirates">United Arab Emirates</option>

                                <option value="United Kingdom">United Kingdom</option>

                                <option value="United States">United States</option>

                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>

                                <option value="Uruguay">Uruguay</option>

                                <option value="Uzbekistan">Uzbekistan</option>

                                <option value="Vanuatu">Vanuatu</option>

                                <option value="Venezuela">Venezuela</option>

                                <option value="Viet Nam">Viet Nam</option>

                                <option value="Virgin Islands, British">Virgin Islands, British</option>

                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>

                                <option value="Wallis and Futuna">Wallis and Futuna</option>

                                <option value="Western Sahara">Western Sahara</option>

                                <option value="Yemen">Yemen</option>

                                <option value="Zambia">Zambia</option>

                                <option value="Zimbabwe">Zimbabwe</option>

                            </select>

                        </div>

                        <div class="input-field">

                            <label for="mobileNumber">Mobile Number</label>

                            <input type="text" placeholder="Enter mobile number" name="mobile_number" id="mobileNumber"required>

                        </div>





                        <div class="input-field">

                            <label>ID Type</label>

                            <select name="id_type" id="idTypeSelect" required>

                                <option disabled selected>Select ID</option>

                                <option>None</option>

                                <option>National ID</option>

                                <option>Passport</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>ID Number</label>

                            <input type="text" placeholder="Enter ID number" name="id_number" id="idNumberInput">

                        </div>



                        <div class="input-field">

                            <label>Religion</label>

                            <input type="text" placeholder="Enter your religion" name="religion" required>

                        </div>

                        

                    </div>

                </div>



                <div class="details ID">

                    <span class="title">Course Details</span>



                    <div class="fields">

                        <div class="input-field">

                            <label>Campus</label>

                            <select name="location" required>

                                <option disabled selected>Select Campus</option>

                                <option>Main Campus</option>

                                <option>Kampala Campus</option>

                                <option>Arua Campus</option>

                                <option>Mbale Campus</option>

                                <option>Kasese Campus</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>Session</label>

                            <select name="time" required>

                                <option disabled selected>Select Time</option>

                                <option>Regular</option>

                                <option>In-service</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>School</label>

                            <select name="school" id="schoolSelect" required>

                                <option disabled selected>Select School</option>

                                <?php

                                // Connect to the database
                                require_once 'admin/config.php';

                                //$conn = new mysqli("localhost", "dbs", "Pass@OurBu@2023!", "bugerifg_apply");



                                // Check connection

                                //if (!$conn) {

                                //    die("Connection failed: " . mysqli_connect_error());

                                //}



                                // Select distinct schools from the course table

                                $sql = "SELECT DISTINCT school FROM course";

                                $result = mysqli_query($conn, $sql);



                                // Display data in the dropdown

                                if (mysqli_num_rows($result) > 0) {

                                    while($row = mysqli_fetch_assoc($result)) {

                                        echo "<option value='" . $row["school"] . "'>" . $row["school"] . "</option>";

                                    }

                                } else {

                                    echo "<option disabled>No schools found.</option>";

                                }



                                // Close database connection

                                mysqli_close($conn);

                                ?>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>Level</label>

                            <select name="level" id="levelSelect" required>

                                <option disabled selected>Select Level</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>Course</label>

                            <select name="course" id="courseSelect" required>

                                <option disabled selected>Select Course</option>

                            </select>

                        </div>



                        <div class="input-field">

                            <label>Document Type</label>

                            <select name="type" required>

                                <option disabled selected>Document to be uploaded</option>

                                <option value="uce">UCE</option>

                                <option value="uace">UACE</option>

                                <option value="uce_uace">UCE &amp; UACE</option>

                                <option value="o_level">O-Level</option>

                                <option value="a_level">A-Level</option>

                                <option value="certificate">Certificate</option>

                                <option value="diploma">Diploma</option>

                                <option value="degree">Degree</option>

                            </select>

                        </div>



                        <script>

                            // Get the references to the select and input elements

                            var idTypeSelect = document.getElementById("idTypeSelect");

                            var idNumberInput = document.getElementById("idNumberInput");



                            // Add event listener to ID Type select

                            idTypeSelect.addEventListener("change", function() {

                                // Check if "None" is selected

                                if (this.value === "None") {

                                    idNumberInput.disabled = true;

                                    idNumberInput.value = ""; // Clear the value when disabled

                                } else {

                                    idNumberInput.disabled = false;

                                }

                            });

                            // Get the references to the select elements

                            var schoolSelect = document.getElementById("schoolSelect");

                            var levelSelect = document.getElementById("levelSelect");

                            var courseSelect = document.getElementById("courseSelect");



                            // Add event listener to school select

                            schoolSelect.addEventListener("change", function() {

                                // Clear previous level and course options

                                levelSelect.innerHTML = "<option disabled selected>Select Level</option>";

                                courseSelect.innerHTML = "<option disabled selected>Select Course</option>";



                                // Get the selected school

                                var selectedSchool = this.value;



                                // Make an AJAX request to fetch levels based on the selected school

                                var xhr = new XMLHttpRequest();

                                xhr.onreadystatechange = function() {

                                    if (xhr.readyState === XMLHttpRequest.DONE) {

                                        if (xhr.status === 200) {

                                            var levels = JSON.parse(xhr.responseText);



                                            // Add the fetched levels to the level select

                                            if (levels.length > 0) {

                                                for (var i = 0; i < levels.length; i++) {

                                                    var option = document.createElement("option");

                                                    option.value = levels[i];

                                                    option.text = levels[i];

                                                    levelSelect.appendChild(option);

                                                }

                                            } else {

                                                var option = document.createElement("option");

                                                option.disabled = true;

                                                option.text = "No levels found.";

                                                levelSelect.appendChild(option);

                                            }

                                        } else {

                                            // Handle error case

                                            var option = document.createElement("option");

                                            option.disabled = true;

                                            option.text = "Failed to fetch levels.";

                                            levelSelect.appendChild(option);

                                        }

                                    }

                                };



                                // Send the AJAX request to fetch levels for the selected school

                                xhr.open("GET", "fetch_levels.php?school=" + encodeURIComponent(selectedSchool), true);

                                xhr.send();

                            });



                            // Add event listener to level select

                            levelSelect.addEventListener("change", function() {

                                // Clear previous course options

                                courseSelect.innerHTML = "<option disabled selected>Select Course</option>";



                                // Get the selected school and level

                                var selectedSchool = schoolSelect.value;

                                var selectedLevel = this.value;



                                // Make an AJAX request to fetch courses based on the selected school and level

                                var xhr = new XMLHttpRequest();

                                xhr.onreadystatechange = function() {

                                    if (xhr.readyState === XMLHttpRequest.DONE) {

                                        if (xhr.status === 200) {

                                            var courses = JSON.parse(xhr.responseText);



                                            // Add the fetched courses to the course select

                                            if (courses.length > 0) {

                                                for (var i = 0; i < courses.length; i++) {

                                                    var option = document.createElement("option");

                                                    option.value = courses[i];

                                                    option.text = courses[i];

                                                    courseSelect.appendChild(option);

                                                }

                                            } else {

                                                var option = document.createElement("option");

                                                option.disabled = true;

                                                option.text = "No courses found.";

                                                courseSelect.appendChild(option);

                                            }

                                        } else {

                                            // Handle error case

                                            var option = document.createElement("option");

                                            option.disabled = true;

                                            option.text = "Failed to fetch courses.";

                                            courseSelect.appendChild(option);

                                        }

                                    }

                                };



                                // Send the AJAX request to fetch courses for the selected school and level

                                xhr.open("GET", "fetch_courses.php?school=" + encodeURIComponent(selectedSchool) + "&level=" + encodeURIComponent(selectedLevel), true);

                                xhr.send();

                            });





                            // Get the references to the input field and country select

                            var mobileNumberInput = document.getElementById('mobileNumber');

                            var countrySelect = document.getElementById('countrySelect');



                            // Initialize intlTelInput on the country select field

                            var input = window.intlTelInput(countrySelect, {

                                separateDialCode: true,

                                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"

                            });



                            // Listen for the country change event

                            countrySelect.addEventListener('change', function() {

                                var countryCode = input.getSelectedCountryData().dialCode;

                                // Set the value of the mobile number input field with the country code

                                mobileNumberInput.value = '+' + countryCode;

                            });

                        </script>





                        <div class="input-field check">

                            <label class="file" for="school-file">Upload School Certificate(s)</label>

                            <div class="file-upload">

                                <input type="file" id="issued-state-file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required name="document">

                                <span>Choose file</span>

                            </div>

                        </div>



                        <script>

                            document.getElementById("issued-state-file").addEventListener("click", function() {

                                alert("Please combine all certificates or results (e.g., UCE, UACE, or equivalent) into a single document file (PDF or doc, docx).");

                            });

                        </script>



                    </div>

                    

                </div> 

                <div class="marketing details">

                    <span class="title">Marketing</span>



                    <div class="fields">

                        <div class="input-field">

                            <label>How did you know about bugema?</label>

                            <select name="bu">

                                <option disabled selected>Select</option>

                                <option value="social_media">Social Media</option>

                                <option value="friend">Friend</option>

                                <option value="internet">Internet</option>

                                <option value="family">Family</option>

                            </select>



                        </div>



                        <div class="input-field">

                            <label>Source of knowledge about bugema</label>

                            <input type="text" placeholder="Enter name of platform or friend" name="kabu">

                        </div>

                        

                    </div>

                </div>

                <button class="sumbit" type="submit">

                        <span class="btnText">Submit</span>

                </button>

            </div>

        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>



</body>

</html>