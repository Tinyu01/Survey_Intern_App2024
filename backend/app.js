const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const sequelize = require('./database');
const surveyRoutes = require('./routes/surveyRoutes');

const app = express();
app.use(cors());
app.use(bodyParser.json());

app.use('/api/survey', surveyRoutes);

sequelize.sync().then(() => {
  console.log('Database connected');
  app.listen(5000, () => console.log('Server running on port 5000'));
});
