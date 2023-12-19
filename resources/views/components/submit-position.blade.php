<head>
    <style>
        .job-create-form {
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

        .button:hover {
            background-color: #006ebf;
        }
    </style>
</head>

<body>
    <form action="{{ route('job.create') }}" method="POST" class="job-create-form">
        @csrf

        <div class="field">
            <label for="jobPosition">Job Position:</label>
            <input type="text" name="positionName" id="jobPosition" class="input" required>
        </div>

        <div class="field">
            <label for="jobSalary">Job Salary:</label>
            <input type="text" name="positionSalary" id="jobSalary" class="input" required>
        </div>

        <button type="submit" class="button">Submit</button>

    </form>
</body>
