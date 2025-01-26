<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enquiry Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 700;
            color: #555;
        }
        input, select, textarea {
            width: 98%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #008080;
            outline: none;
        }
        input[type="submit"] {
            background-color: #008080;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 700;
            padding: 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #008080;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .col-half {
            flex: 1;
            min-width: calc(48% - 10px);
        }
        @media (max-width: 600px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            h1 {
                font-size: 20px;
            }
            .row {
                flex-direction: column;
                gap: 0;
            }
            .col-half {
                min-width: 98%;
            }
            input[type="submit"] {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>You can send your enquiry via the form below.</h1>
        <form id="enquiryForm">
            <label for="trip-name">Trip name: *</label>
            <p id="trip-name">Ghorepani Poon Hill Trek</p>
            
            <label for="name">Your name: *</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name *" required>
            
            <label for="email">Your email: *</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email *" required>
            
            <div class="row">
                <div class="col-half">
                    <label for="country">Country *</label>
                    <select id="country" name="country" required onchange="adjustInputSize()">
                        <option value="">Choose a country*</option>
                        <option value="USA">United States of America</option>
                        <option value="UK">United Kingdom</option>
                        <option value="Canada">Canada</option>
                        <option value="Australia">Australia</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="Japan">Japan</option>
                        <option value="India">India</option>
                        <option value="China">China</option>
                        <option value="Brazil">Brazil</option>
                    </select>
                </div>
                <div class="col-half">
                    <label for="contact-number">Contact number: *</label>
                    <input type="text" id="contact-number" name="contact-number" placeholder="Enter Your Contact Number*" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-half">
                    <label for="adults">No. of Adults *</label>
                    <input type="number" id="adults" name="adults" placeholder="Enter Number of Adults*" required>
                </div>
                <div class="col-half">
                    <label for="children">No. of children</label>
                    <input type="number" id="children" name="children" placeholder="Enter Number of Children">
                </div>
            </div>
            
            <label for="subject">Enquiry Subject: *</label>
            <input type="text" id="subject" name="subject" placeholder="Enquiry Subject" required>
            
            <label for="message">Your Message *</label>
            <textarea id="message" name="message" rows="5" placeholder="Enter Your message*" required></textarea>
            
            <input type="submit" value="Send Email">
        </form>
    </div>

    <script>
        // Function to adjust input size based on selected country
        function adjustInputSize() {
            const countrySelect = document.getElementById('country');
            const selectedCountry = countrySelect.options[countrySelect.selectedIndex].text;
            const contactNumberInput = document.getElementById('contact-number');

            // Calculate the width based on the length of the selected country name
            const width = Math.min(Math.max(selectedCountry.length * 10, 100), 300); // Min 100px, Max 300px
            contactNumberInput.style.width = `${width}px`;
        }

        // Form submission handling
        document.getElementById('enquiryForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const country = document.getElementById('country').value;
            const contactNumber = document.getElementById('contact-number').value;
            const adults = document.getElementById('adults').value;
            const children = document.getElementById('children').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (!validateEmail(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            const formData = {
                name,
                email,
                country,
                contactNumber,
                adults,
                children,
                subject,
                message
            };

            console.log('Form Data Submitted:', formData);
            alert('Your enquiry has been sent successfully!');
        });

        // Email validation function
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
    </script>
</body>
</html>