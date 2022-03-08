// Core modules
const path = require('path')

// ENV
require('dotenv').config();

// Express
const express = require('express');
const app = express();
const mainRouter = require('./routes/main')

// Set view engine
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'ejs')
app.use(express.static('public'))

// Using router created
app.use(mainRouter)

app.get('/' , (req, res) => res.render('index'))

// Listen on port
app.listen(process.env.PORT || 8080)