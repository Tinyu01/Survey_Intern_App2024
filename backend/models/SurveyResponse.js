const { DataTypes } = require('sequelize');
const sequelize = require('../database');

const SurveyResponse = sequelize.define('SurveyResponse', {
  surname: { type: DataTypes.STRING, allowNull: false },
  first_names: { type: DataTypes.STRING, allowNull: false },
  contact_number: { type: DataTypes.STRING, allowNull: false },
  date: { type: DataTypes.DATE, allowNull: false },
  age: { type: DataTypes.INTEGER, allowNull: false },
  favorite_food: { type: DataTypes.JSON, allowNull: false },
  ratings: { type: DataTypes.JSON, allowNull: false },
});

module.exports = SurveyResponse;
