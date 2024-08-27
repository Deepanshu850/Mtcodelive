<?php
// Start the session at the very beginning
session_start();

// Set headers to prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Check if the user is logged in, if not then redirect him to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: loginform.php"); // Redirect to the login page
    exit;
}

// Proceed with your page content if the user is authenticated
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>MoneyTree Realty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Place this in the <head> or right before closing the </body> tag -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>


</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <?php if (isset($_GET['submission']) && $_GET['submission'] === 'success') : ?>
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your entry has been submitted successfully!',
                    icon: 'success',
                    confirmButtonText: 'Great'
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#to_whom').select2({
                    placeholder: "Select a name",
                    allowClear: true
                });
            });
        </script>

    <?php endif; ?>

    <div class="bg-white p-8 rounded shadow-md max-w-3xl w-full mx-2">
        <!-- Logo Section -->

        <div style="background-color: #005b52; margin-left: 0; margin-right: 0; padding-left: 0; padding-right: 0;" class="flex justify-center">
            <img src="./assets/img/logo.png" alt="Company Logo" class="mb-6 mt-3">
        </div>

        <!-- Example logout button -->
        <style>
            .rounded-logout-btn {
                background-color: #ff0404;
                /* Green background */
                border: none;
                /* Remove border */
                color: white;
                /* White text */
                padding: 10px 24px;
                /* Some padding */
                text-align: center;
                /* Center-aligned text */
                text-decoration: none;
                /* No underline */
                display: inline-block;
                /* Use inline-block */
                font-size: 16px;
                /* Set font size */
                margin: 4px 2px;
                /* Add some margin */
                cursor: pointer;
                /* Pointer/hand icon */
                border-radius: 25px;
                /* Rounded corners */
                transition-duration: 0.4s;
                /* Smooth transition */
            }

            .rounded-logout-btn:hover {
                background-color: red;
                /* White background on hover */
                color: black;
                /* Black text on hover */
            }
        </style>
        <form action="logout.php" method="post">
            <button type="submit" name="logout" class="logout-button"><i class="fas fa-sign-out-alt"></i></button>
        </form>

        <h2 class="text-2xl font-bold mb-6 text-center"> Entry Form</h2>
        <form action="entryformprocess.php" method="post" class="grid grid-cols-1 gap-6">
            <!-- Fields for S.No., Date, and Time which will be auto-generated in the backend -->
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required class="border rounded px-4 py-2 w-full" />
                </div>
                <div class="form-group">
                    <label for="phone_no" class="block text-gray-700">Mobile No:</label>
                    <input type="tel" id="phone_no" name="phone_no" class="border rounded px-4 py-2 w-full" pattern="^[0-9]{10}$" title="Mobile number must be 10 digits" required />
                </div>

            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="form-group">
                    <label for="address" class="block text-gray-700">Address:</label>
                    <input type="text" id="address" name="address" class="border rounded px-4 py-2 w-full" />
                </div>
                <div class="form-group">
                    <label for="city" class="block text-gray-700">City:</label>
                    <input type="text" id="city" name="city" class="border rounded px-4 py-2 w-full" />
                </div>
            </div>
            <div class="form-group">
                <label for="to_whom" class="block text-gray-700">To Whom:</label>
                <select id="to_whom" required name="to_whom" class="border rounded px-4 py-2 w-full">
                    <option value="1001-Jitender Ramdev">Jitender Ramdev - 1001</option>
                    <option value="1002-Yogesh Kumar Mishra">Yogesh Kumar Mishra - 1002</option>
                    <option value="1003-Avinash Srivastava">Avinash Srivastava - 1003</option>
                    <option value="1004-Vikas Kumar">Vikas Kumar - 1004</option>
                    <option value="1005-Deendayal">Deendayal - 1005</option>
                    <option value="1006-Chirag Kapoor">Chirag Kapoor - 1006</option>
                    <option value="1007-Garvit Sharma">Garvit Sharma - 1007</option>
                    <option value="1008-Dharmendra Kumar">Dharmendra Kumar - 1008</option>
                    <option value="1009-Ravi Kumar Hinduja">Ravi Kumar Hinduja - 1009</option>
                    <option value="1010-Monu Tyagi">Monu Tyagi - 1010</option>
                    <option value="1011-Adhiraj Singh Sishodia">Adhiraj Singh Sishodia - 1011</option>
                    <option value="1012-Sharda Prasad Kushwaha">Sharda Prasad Kushwaha - 1012</option>
                    <option value="1013-Kalam Mohammad Khan">Kalam Mohammad Khan - 1013</option>
                    <option value="1015-Prateek Kapoor">Prateek Kapoor - 1015</option>
                    <option value="1016-Nakul Tyagi">Nakul Tyagi - 1016</option>
                    <option value="1017-Hardik Bagla">Hardik Bagla - 1017</option>
                    <option value="1018-Shivam Tyagi">Shivam Tyagi - 1018</option>
                    <option value="1019-Azhar Mirza">Azhar Mirza - 1019</option>
                    <option value="1020-Aman Sharma">Aman Sharma - 1020</option>
                    <option value="1021-Anurag Singh Sisodiya">Anurag Singh Sisodiya - 1021</option>
                    <option value="1022-Dawar Ali Zaidi">Dawar Ali Zaidi - 1022</option>
                    <option value="1023-Akash Tyagi">Akash Tyagi - 1023</option>
                    <option value="1024-Omar Naseem">Omar Naseem - 1024</option>
                    <option value="1026-Ritika Kapoor">Ritika Kapoor - 1026</option>
                    <option value="1027-Mohan Singh">Mohan Singh - 1027</option>
                    <option value="1028-Rohan Rawat">Rohan Rawat - 1028</option>
                    <option value="1029-Jasleen Singh">Jasleen Singh - 1029</option>
                    <option value="1030-Sahil Arora">Sahil Arora - 1030</option>
                    <option value="1032-Shubham Tyagi">Shubham Tyagi - 1032</option>
                    <option value="1033-Sonu Tyagi">Sonu Tyagi - 1033</option>
                    <option value="1034-Shubham Mehta">Shubham Mehta - 1034</option>
                    <option value="1035-Ankit Sahani">Ankit Sahani - 1035</option>
                    <option value="1036-Akshit Baliyan">Akshit Baliyan - 1036</option>
                    <option value="1037-Anil Kumar">Anil Kumar - 1037</option>
                    <option value="1038-Mukul Tyagi">Mukul Tyagi - 1038</option>
                    <option value="1039-Mayank .">Mayank . - 1039</option>
                    <option value="1040-Shashank Kumar Tyagi">Shashank Kumar Tyagi - 1040</option>
                    <option value="1041-Rohan Ahuja">Rohan Ahuja - 1041</option>
                    <option value="1042-Chetan Saroha">Chetan Saroha - 1042</option>
                    <option value="1044-Richa">Richa - 1044</option>
                    <option value="1045-Rohit Kumar Singh">Rohit Kumar Singh - 1045</option>
                    <option value="1046-Santosh Kumar Sharma">Santosh Kumar Sharma - 1046</option>
                    <option value="1047-Sachin Khurana">Sachin Khurana - 1047</option>
                    <option value="1048-Shubham Tyagi">Shubham Tyagi - 1048</option>
                    <option value="1049-Ankush Kaushik">Ankush Kaushik - 1049</option>
                    <option value="1050-Sandeep Bhatia">Sandeep Bhatia - 1050</option>
                    <option value="1051-Mohd Ubaid Rashid">Mohd Ubaid Rashid - 1051</option>
                    <option value="1052-Devender Kumar">Devender Kumar - 1052</option>
                    <option value="1053-Nitin Kapoor">Nitin Kapoor - 1053</option>
                    <option value="1054-Gaurab Sirohi">Gaurab Sirohi - 1054</option>
                    <option value="1055-Arjun .">Arjun . - 1055</option>
                    <option value="1057-Siddhant Tyagi">Siddhant Tyagi - 1057</option>
                    <option value="1061-Sachin Kumar">Sachin Kumar - 1061</option>
                    <option value="1063-Bhavay Arora">Bhavay Arora - 1063</option>
                    <option value="1064-Vikas Babu">Vikas Babu - 1064</option>
                    <option value="1065-Anish Kumar Singh">Anish Kumar Singh - 1065</option>
                    <option value="1066-Rohit Kumar">Rohit Kumar - 1066</option>
                    <option value="1067-Mohit Khari">Mohit Khari - 1067</option>
                    <option value="1068-Charita Sharma">Charita Sharma - 1068</option>
                    <option value="1069-Shubham Tyagi">Shubham Tyagi - 1069</option>
                    <option value="1070-Pankaj">Pankaj - 1070</option>
                    <option value="1072-Ajay Deep Tripathi">Ajay Deep Tripathi - 1072</option>
                    <option value="1073-Sunny Kumar">Sunny Kumar - 1073</option>
                    <option value="1074-Nitin">Nitin - 1074</option>
                    <option value="1075-Abhay Kumar">Abhay Kumar - 1075</option>
                    <option value="1076-Naveen Kumar">Naveen Kumar - 1076</option>
                    <option value="1077-Krishan Singh">Krishan Singh - 1077</option>
                    <option value="1078-Shivam Chaudhary">Shivam Chaudhary - 1078</option>
                    <option value="1080-Deepak Gautam">Deepak Gautam - 1080</option>
                    <option value="1081-Anurag Singh">Anurag Singh - 1081</option>
                    <option value="1082-Saksham Dixit">Saksham Dixit - 1082</option>
                    <option value="1083-Navneet Kumar Singh">Navneet Kumar Singh - 1083</option>
                    <option value="1084-Bibekanada Das">Bibekanada Das - 1084</option>
                    <option value="1086-Ashish Kumar Rawat">Ashish Kumar Rawat - 1086</option>
                    <option value="1087-Anil Sharma">Anil Sharma - 1087</option>
                    <option value="1088-Kapil Solanki">Kapil Solanki - 1088</option>
                    <option value="1089-Vatsal Arora">Vatsal Arora - 1089</option>
                    <option value="1090-Naveen Kumar">Naveen Kumar - 1090</option>
                    <option value="1091-Prerna Gupta">Prerna Gupta - 1091</option>
                    <option value="1092-Rashmi Gupta">Rashmi Gupta - 1092</option>
                    <option value="1094-Manoj">Manoj - 1094</option>
                    <option value="1095-Saurav Kumar">Saurav Kumar - 1095</option>
                    <option value="1096-Vishesh Bhardwaj">Vishesh Bhardwaj - 1096</option>
                    <option value="1097-Shubham Biswas">Shubham Biswas - 1097</option>
                    <option value="1101-Rajan Verma">Rajan Verma - 1101</option>
                    <option value="1102-Aman Kumar">Aman Kumar - 1102</option>
                    <option value="1103-Kartik Sharma">Kartik Sharma - 1103</option>
                    <option value="1104-Yash Phul">Yash Phul - 1104</option>
                    <option value="1105-Arun Kandpal">Arun Kandpal - 1105</option>
                    <option value="1106-Shailesh Sinha">Shailesh Sinha - 1106</option>
                    <option value="1107-Pranjul Tyagi">Pranjul Tyagi - 1107</option>
                    <option value="1108-Kartikey Jaiswal">Kartikey Jaiswal - 1108</option>
                    <option value="1109-Shivam Sharma">Shivam Sharma - 1109</option>
                    <option value="1111-Shivam Goyal">Shivam Goyal - 1111</option>
                    <option value="1112-Vikas Singh">Vikas Singh - 1112</option>
                    <option value="1113-Yash Gupta">Yash Gupta - 1113</option>
                    <option value="1114-Gitansh Kataria">Gitansh Kataria - 1114</option>
                    <option value="1115-Shubham Singh">Shubham Singh - 1115</option>
                    <option value="1116-khushaal Manchanda">khushaal Manchanda - 1116</option>
                    <option value="1117-Amit SIngh">Amit SIngh - 1117</option>
                    <option value="1121-Suraj Sutrakar">Suraj Sutrakar - 1121</option>
                    <option value="1122-MD Vaish">MD Vaish - 1122</option>
                    <option value="1123-Kartik Chauhan">Kartik Chauhan - 1123</option>
                    <option value="1124-Aman Kumar Verma">Aman Kumar Verma - 1124</option>
                    <option value="1125-Gourav Arora">Gourav Arora - 1125</option>
                    <option value="1126-Vishal Tyagi">Vishal Tyagi - 1126</option>
                    <option value="1130-Raman Nagar">Raman Nagar - 1130</option>
                    <option value="1131-Deepanshu Chauhan">Deepanshu Chauhan - 1131</option>
                    <option value="1132-Sameer Ansari">Sameer Ansari - 1132</option>
                    <option value="1133-Anurag Sharma">Anurag Sharma - 1133</option>
                    <option value="1134-Salman Ali">Salman Ali - 1134</option>
                    <option value="1135-Sunny Raj">Sunny Raj - 1135</option>
                    <option value="1136-kajol saluja">kajol saluja - 1136</option>
                    <option value="1137-Gurmeet Chauhan">Gurmeet Chauhan - 1137</option>
                    <option value="1138-Sumit Kumar">Sumit Kumar - 1138</option>
                    <option value="1139-harshit singh">harshit singh - 1139</option>
                    <option value="1140-Dev Prakash Sharma">Dev Prakash Sharma - 1140</option>
                    <option value="1141-Priyanshu Jain">Priyanshu Jain - 1141</option>
                    <option value="1142-Pranjul Porwal">Pranjul Porwal - 1142</option>
                    <option value="1145-Rajat Goswami">Rajat Goswami - 1145</option>
                    <option value="1146-Armaan Sharma">Armaan Sharma - 1146</option>
                    <option value="1147-Rohit Rawat">Rohit Rawat - 1147</option>
                    <option value="1149-Gulshan">Gulshan - 1149</option>
                    <option value="1150-Raman">Raman - 1150</option>
                    <option value="1152-Areeb khan">Areeb khan - 1152</option>
                    <option value="1153-Manoj Ramniwas Sharma">Manoj Ramniwas Sharma - 1153</option>
                    <option value="1154-Imran Quraishi">Imran Quraishi - 1154</option>
                    <option value="1156-Ankit Rawat">Ankit Rawat - 1156</option>
                    <option value="1157-Jagjeet Singh">Jagjeet Singh - 1157</option>
                    <option value="1158-Nitish Thapar">Nitish Thapar - 1158</option>
                    <option value="1159-Choudhary Adesh">Choudhary Adesh - 1159</option>
                    <option value="1160-Mohammed Afzal">Mohammed Afzal - 1160</option>
                    <option value="1164-Vaseem Ahmad">Vaseem Ahmad - 1164</option>
                    <option value="1165-Pankaj">Pankaj - 1165</option>
                    <option value="1167-Deepak Kumar">Deepak Kumar - 1167</option>
                    <option value="1168-Vinay Kumar">Vinay Kumar - 1168</option>
                    <option value="1169-Sudip kumar">Sudip kumar - 1169</option>
                    <option value="1173-Mohit Kumar">Mohit Kumar - 1173</option>
                    <option value="1177-Gaurav Kumar">Gaurav Kumar - 1177</option>
                    <option value="1178-Devesh Sharma">Devesh Sharma - 1178</option>
                    <option value="1179-Ayesha Parveen">Ayesha Parveen - 1179</option>
                    <option value="1180-Narayan Singh">Narayan Singh - 1180</option>
                    <option value="1184-Tushar Tomar">Tushar Tomar - 1184</option>
                    <option value="1186-Harshit Tyagi">Harshit Tyagi - 1186</option>
                    <option value="1190-Ashish">Ashish - 1190</option>
                    <option value="1192-Ujjwal Sharma">Ujjwal Sharma - 1192</option>
                    <option value="1193-Kunal Gilhotra">Kunal Gilhotra - 1193</option>
                    <option value="1194-Anil Kumar">Anil Kumar - 1194</option>
                    <option value="1197-Sweta Singh">Sweta Singh - 1197</option>
                    <option value="1198-ANSH NARANG">ANSH NARANG - 1198</option>
                    <option value="1201-Raghav Chawla">Raghav Chawla - 1201</option>
                    <option value="1202-Shekhar Pundir">Shekhar Pundir - 1202</option>
                    <option value="1206-Arun">Arun - 1206</option>
                    <option value="1207-Yash Gupta">Yash Gupta - 1207</option>
                    <option value="1208-Gaurav Kumar">Gaurav Kumar - 1208</option>
                    <option value="1210-Surender Sharma">Surender Sharma - 1210</option>
                    <option value="1213-Devanshu Tyagi">Devanshu Tyagi - 1213</option>
                    <option value="1214-Deepanshu Tyagi">Deepanshu Tyagi - 1214</option>
                    <option value="1215-Vishal Giri">Vishal Giri - 1215</option>
                    <option value="1217-Aryan Tyagi">Aryan Tyagi - 1217</option>
                    <option value="1219-Vishal Pal">Vishal Pal - 1219</option>
                    <option value="1221-Mohd Shahid">Mohd Shahid - 1221</option>
                    <option value="1222-Saurabh Bajaj">Saurabh Bajaj - 1222</option>
                    <option value="1224-Sparsh Tyagi">Sparsh Tyagi - 1224</option>
                    <option value="1225-Shubair Khan">Shubair Khan - 1225</option>
                    <option value="1226-Sagar Sharma">Sagar Sharma - 1226</option>
                    <option value="1228-Navneet Singh">Navneet Singh - 1228</option>
                    <option value="1229-Rohit Dubey">Rohit Dubey - 1229</option>
                    <option value="1230-Harsh Choudhary">Harsh Choudhary - 1230</option>
                    <option value="1236-Jitendra Singh">Jitendra Singh - 1236</option>
                    <option value="1253-Gaurav Yadav">Gaurav Yadav - 1253</option>
                    <option value="1258-Shailender Singh">Shailender Singh - 1258</option>
                    <option value="1259-Pawan Kumar">Pawan Kumar - 1259</option>
                    <option value="1260-Montoo Raja">Montoo Raja - 1260</option>
                    <option value="1269-Raushan Gupta">Raushan Gupta - 1269</option>
                    <option value="1270-Rohit Kumar Verma">Rohit Kumar Verma - 1270</option>
                    <option value="1271-Manvi Bhardwaj">Manvi Bhardwaj - 1271</option>
                    <option value="1272-Jazib Javed">Jazib Javed - 1272</option>
                    <option value="1276-Suraj Taneja">Suraj Taneja - 1276</option>
                    <option value="1278-Muzammil Abbas">Muzammil Abbas - 1278</option>
                    <option value="1279-Aniket Sasmal">Aniket Sasmal - 1279</option>
                    <option value="1280-Keshav Kumar">Keshav Kumar - 1280</option>
                    <option value="1282-Harsh Vardhan">Harsh Vardhan - 1282</option>
                    <option value="1283-Amit Bansal">Amit Bansal - 1283</option>
                    <option value="1284-Manish Sharma">Manish Sharma - 1284</option>
                    <option value="1285-Shiva Shankar Tiwari">Shiva Shankar Tiwari - 1285</option>
                    <option value="1286-Rishabh Chauhan">Rishabh Chauhan - 1286</option>
                    <option value="1287-Prince Tyagi">Prince Tyagi - 1287</option>
                    <option value="1288-Sandeep Sethi">Sandeep Sethi - 1288</option>
                    <option value="1289-Prabhsimran Singh">Prabhsimran Singh - 1289</option>
                    <option value="1290-Shubham Kumar Chauhan">Shubham Kumar Chauhan - 1290</option>
                    <option value="1291-Anuj Kumar">Anuj Kumar - 1291</option>
                    <option value="1293-Vanshika Sharma">Vanshika Sharma - 1293</option>
                    <option value="1294-Rohit Nayak">Rohit Nayak - 1294</option>
                    <option value="1295-Gurbinder Singh Kang">Gurbinder Singh Kang - 1295</option>
                    <option value="1297-Anil Kumar">Anil Kumar - 1297</option>
                    <option value="1298-Rajesh Arora">Rajesh Arora - 1298</option>
                    <option value="1299-Akash Verma">Akash Verma - 1299</option>
                    <option value="1301-Gourav Sharma">Gourav Sharma - 1301</option>
                    <option value="1302-Satender Chaudhary">Satender Chaudhary - 1302</option>
                    <option value="1303-Prakhar Yadav">Prakhar Yadav - 1303</option>
                    <option value="1307-Amit">Amit - 1307</option>
                    <option value="1308-Lalit Kumar">Lalit Kumar - 1308</option>
                    <option value="1309-Rohit Bal">Rohit Bal - 1309</option>
                    <option value="1318-Shivendra Pratap Singh">Shivendra Pratap Singh - 1318</option>
                    <option value="1320-Shailendra Gautam">Shailendra Gautam - 1320</option>
                    <option value="1322-Aarti Mathur">Aarti Mathur - 1322</option>
                    <option value="1323-Harsh Rathi">Harsh Rathi - 1323</option>
                    <option value="1324-Aarti">Aarti - 1324</option>
                    <option value="1325-Shashi Shekhar Sisodiya">Shashi Shekhar Sisodiya - 1325</option>
                    <option value="1326-Yash Sharma">Yash Sharma - 1326</option>
                    <option value="1327-Mohit Bhati">Mohit Bhati - 1327</option>
                    <option value="1328-Neha Bharti">Neha Bharti - 1328</option>
                    <option value="1329-Rahul Tanwar">Rahul Tanwar - 1329</option>
                    <option value="1330-Shubham Narang">Shubham Narang - 1330</option>
                    <option value="1331-Neha Bhardwaj">Neha Bhardwaj - 1331</option>
                    <option value="1332-Brijesh Kumar Prajapati">Brijesh Kumar Prajapati - 1332</option>
                    <option value="1333-Pratham Pal">Pratham Pal - 1333</option>
                    <option value="1335-Sameer Afzal">Sameer Afzal - 1335</option>
                    <option value="1336-Amit Sharma">Amit Sharma - 1336</option>
                    <option value="1337-Garima Kaur">Garima Kaur - 1337</option>
                    <option value="1338-Harish">Harish - 1338</option>
                    <option value="1339-Aadil">Aadil - 1339</option>
                    <option value="1342-Murshad Ali Pasha">Murshad Ali Pasha - 1342</option>
                    <option value="1343-Abhishek Tyagi">Abhishek Tyagi - 1343</option>
                    <option value="1344-Vartul Pandey">Vartul Pandey - 1344</option>
                    <option value="1345-Vikas Kumar">Vikas Kumar - 1345</option>
                    <option value="1346-Deepak Kumar Khatri">Deepak Kumar Khatri - 1346</option>
                    <option value="1347-Guddu Kumar">Guddu Kumar - 1347</option>
                    <option value="1349-Abhinav Arora">Abhinav Arora - 1349</option>
                    <option value="1350-Ayush Gangwar">Ayush Gangwar - 1350</option>
                    <option value="1351-Ram Narayan Kumar">Ram Narayan Kumar - 1351</option>
                    <option value="1352-Vineet Kumar">Vineet Kumar - 1352</option>
                    <option value="1353-Bhanu Pratap">Bhanu Pratap - 1353</option>
                    <option value="1354-Rishabh Bhasin">Rishabh Bhasin - 1354</option>
                    <option value="1355-Bharat Chaudhary">Bharat Chaudhary - 1355</option>
                    <option value="1356-Karunesh Koul">Karunesh Koul - 1356</option>
                    <option value="1358-Prashant Sharma">Prashant Sharma - 1358</option>
                    <option value="1359-Rohit Kumar">Rohit Kumar - 1359</option>
                    <option value="1360-Mukesh">Mukesh - 1360</option>
                    <option value="1362-Atul Bhardwaj">Atul Bhardwaj - 1362</option>
                    <option value="1365-Pragati Srivastava">Pragati Srivastava - 1365</option>
                    <option value="1377-Priyanshu Bhusan">Priyanshu Bhusan - 1377</option>
                    <option value="1014-Rajat Chugh">Rajat Chugh - 1014</option>
                    <option value="1025-Mohd. Shauzab Kazmi">Mohd. Shauzab Kazmi - 1025</option>
                    <option value="1043-Tejvir">Tejvir - 1043</option>
                    <option value="1056-Neeraj Kataria">Neeraj Kataria - 1056</option>
                    <option value="1059-Mukul Chauhan">Mukul Chauhan - 1059</option>
                    <option value="1060-Aayesha">Aayesha - 1060</option>
                    <option value="1062-Abhishek Choudhary">Abhishek Choudhary - 1062</option>
                    <option value="1071-Manan Saluja">Manan Saluja - 1071</option>
                    <option value="1085-Yunus Kamal Khan">Yunus Kamal Khan - 1085</option>
                    <option value="1093-Lalita Kumari">Lalita Kumari - 1093</option>
                    <option value="1098-Monu Singh">Monu Singh - 1098</option>
                    <option value="1119-Mandakini Mall">Mandakini Mall - 1119</option>
                    <option value="1127-Somvir">Somvir - 1127</option>
                    <option value="1129-OM Bharaj">OM Bharaj - 1129</option>
                    <option value="1143-Vivek Sharma">Vivek Sharma - 1143</option>
                    <option value="1144-Kamal Mehta">Kamal Mehta - 1144</option>
                    <option value="1148-Prateek Julka">Prateek Julka - 1148</option>
                    <option value="1155-Arvind Soorma">Arvind Soorma - 1155</option>
                    <option value="1162-Paras">Paras - 1162</option>
                    <option value="1163-Lalit Kumar">Lalit Kumar - 1163</option>
                    <option value="1185-Abhishek Nagar">Abhishek Nagar - 1185</option>
                    <option value="1188-Amit Sawhney">Amit Sawhney - 1188</option>
                    <option value="1196-Shubham Taliyan">Shubham Taliyan - 1196</option>
                    <option value="1199-Akhilesh Kumar Maurya">Akhilesh Kumar Maurya - 1199</option>
                    <option value="1211-Sonia Chib">Sonia Chib - 1211</option>
                    <option value="1220-Sahil Singh">Sahil Singh - 1220</option>
                    <option value="1232-Saksham Garg">Saksham Garg - 1232</option>
                    <option value="1255-Sandeep Chaudhary">Sandeep Chaudhary - 1255</option>
                    <option value="1264-Suraj Sharma">Suraj Sharma - 1264</option>
                    <option value="1281-Rishee Pratap Singh">Rishee Pratap Singh - 1281</option>
                    <option value="1310-Manoj Kumar">Manoj Kumar - 1310</option>
                    <option value="1311-Sobit Bhardwaj">Sobit Bhardwaj - 1311</option>
                    <option value="1312-Sandeep Kumar">Sandeep Kumar - 1312</option>
                    <option value="1363-Mudit Dhama">Mudit Dhama - 1363</option>
                    <option value="1364-Dhruv Nassa">Dhruv Nassa - 1364</option>
                    <option value="1374-Piyush Raj Kataria">Piyush Raj Kataria - 1374</option>
                    <option value="1375-Manjeet Kumar">Manjeet Kumar - 1375</option>
                    <option value="1376-Sanjeet Sharma">Sanjeet Sharma - 1376</option>
                    <option value="1378-Ashwani">Ashwani - 1378</option>
                    <option value="1379-Rupin">Rupin - 1379</option>
                    <option value="1380-Fateh Singh">Fateh Singh - 1380</option>
                    <option value="1381-Anurag Arora">Anurag Arora - 1381</option>
                    <option value="1382-Naveen">Naveen - 1382</option>
                    <option value="1384-Pankaj Kumar">Pankaj Kumar - 1384</option>
                    <option value="1385-Akash Agarwal">Akash Agarwal - 1385</option>
                    <option value="1386-Prateek Tanwar">Prateek Tanwar - 1386</option>
                    <option value="1387-Atul Kumar Sahu">Atul Kumar Sahu - 1387</option>
                    <option value="1393-Devanshu Mehandru">Devanshu Mehandru - 1393</option>
                    <option value="1394-Harish Raturi">Harish Raturi - 1394</option>
                    <option value="1395-Tanya Lakhwani">Tanya Lakhwani - 1395</option>
                    <option value="1396-Devanshu Vohra">Devanshu Vohra - 1396</option>
                    <option value="1397-Narendra Pratap Vashishth">Narendra Pratap Vashishth - 1397</option>
                    <option value="1398-Suyansh Shukla">Suyansh Shukla - 1398</option>
                    <option value="1400-Preet">Preet - 1400</option>
                    <option value="1401-Raj">Raj - 1401</option>
                    <option value="1402-Ajay Kumar">Ajay Kumar - 1402</option>
                    <option value="1404-Abdul Kadir">Abdul Kadir - 1404</option>
                    <option value="1405-Rekha Sharma">Rekha Sharma - 1405</option>
                    <option value="1407-Gitansh Arora">Gitansh Arora - 1407</option>
                    <option value="1408-NOMAN AHMAD USMANI">NOMAN AHMAD USMANI - 1408</option>
                    <option value="1409-Elina Nishad">Elina Nishad - 1409</option>
                    <option value="1413-Suneet Chauhan">Suneet Chauhan - 1413</option>
                    <option value="1414-Kishan Rai">Kishan Rai - 1414</option>
                    <option value="1415-Shubham">Shubham - 1415</option>
                    <option value="1416-Mukawil">Mukawil - 1416</option>
                    <option value="1418-Vipin Kumar">Vipin Kumar - 1418</option>
                    <option value="1419-Aniket">Aniket - 1419</option>
                    <option value="1420-Girish Anand">Girish Anand - 1420</option>
                    <option value="1421-Manish Singh">Manish Singh - 1421</option>
                    <option value="1422-Ravinder Mehra">Ravinder Mehra - 1422</option>
                    <option value="1423-Ankit Grewal">Ankit Grewal - 1423</option>
                    <option value="1424-Chander Pal">Chander Pal - 1424</option>
                    <option value="1425-Manish Kumar">Manish Kumar - 1425</option>
                    <option value="1426-Himanshu Rana">Himanshu Rana - 1426</option>

                </select>
            </div>

            <div class="form-group">
                <label for="purpose" class="block text-gray-700">Purpose:</label>
                <input type="text" id="purpose" name="purpose" class="border rounded px-4 py-2 w-full" />
            </div>
            <div class="form-group">
                <label for="remarks" class="block text-gray-700">Remark's:</label>
                <textarea id="remarks" name="remarks" class="border rounded px-4 py-2 w-full" rows="4"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>



    </div>
</body>

</html>