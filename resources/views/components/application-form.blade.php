<head>

    <style>
        .applicant-form {
            margin: 0 auto;
            width: 500px;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 200px;
            text-align: right;
            font-weight: bold;
        }

        .input {
            width: 250px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

</head>


<body>

    <form action=' {{ route('create.application') }} ' method="POST" class='applicant-form'>
        @csrf

        <div class="field">
            <label for="fname">First Name:</label>
            <input type="text" name="firstName" id="fname" class="input" required>
        </div>

        <div class="field">
            <label for="lname">Last Name:</label>
            <input type="text" name="lastName" id="lname" class="input" required>
        </div>
        <div class="field">
            <label for="uni">University:</label>
            <input type="text" name="university" id="uni" class="input" required>
        </div>

        <div class="field">
            <label for="position">Position:</label>
            <input type="text" name="positionApply" id="position" class="input" required>
        </div>

        <button type="submit" class="button">Submit</button>

    </form>

</body>
