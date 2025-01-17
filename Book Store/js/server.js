const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
const port = 3000;

// Middleware to parse form data
app.use(bodyParser.urlencoded({ extended: true }));

// MySQL database connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root', 
    password: '', 
    database: 'bookstore', // Database name
});

// Connect to the database
db.connect(err => {
    if (err) {
        console.error('Error connecting to the database:', err);
        return;
    }
    console.log('Connected to the MySQL database.');
});

// Handle form submission
app.post('/signup', (req, res) => {
    const { fullName, email, password } = req.body;

    // Change the table name to 'student'
    const query = 'INSERT INTO student (fullName, email, password) VALUES (?, ?, ?)';
    db.query(query, [fullName, email, password], (err, result) => {
        if (err) {
            console.error('Error inserting data into the database:', err);
            res.status(500).send('Internal Server Error');
            return;
        }
        res.send('Sign up successful! Welcome, ' + fullName);
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
