const express = require('express');
const SurveyResponse = require('../models/SurveyResponse');

const router = express.Router();

// POST: Save survey data
router.post('/', async (req, res) => {
  try {
    const survey = await SurveyResponse.create(req.body);
    res.status(201).json(survey);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

// GET: Retrieve survey results
router.get('/results', async (req, res) => {
  try {
    const totalSurveys = await SurveyResponse.count();
    const averageAge = await SurveyResponse.findAll({ attributes: [[sequelize.fn('AVG', sequelize.col('age')), 'avgAge']] });
    const maxAge = await SurveyResponse.max('age');
    const minAge = await SurveyResponse.min('age');
const responses = await SurveyResponse.findAll();
    const foodCounts = responses.reduce((acc, response) => {
      response.favorite_food.forEach(food => {
        acc[food] = (acc[food] || 0) + 1;
      });
      return acc;
    }, {});

    const results = {
      totalSurveys,
      averageAge: parseFloat(averageAge[0].dataValues.avgAge || 0).toFixed(1),
      maxAge,
      minAge,
      foodPercentages: Object.fromEntries(
        Object.entries(foodCounts).map(([food, count]) => [food, ((count / totalSurveys) * 100).toFixed(1)])
      ),
    };

    res.status(200).json(results);
  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

module.exports = router;
