const express = require('express')
const router = express.Router()

// Setting routes for the pages
router.get('/about', (req,res) => res.render('about'));

router.get('/services', (req,res) => res.render('services'));

router.get('/contact', (req,res) => res.render('contact'));

// Contact request form
router.post('/contact', (req, res) => console.log('posty'));


module.exports = router