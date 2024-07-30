const express = require('express');
const axios = require('axios');
const app = express();
const PORT = process.env.PORT || 3000;

app.get('/weather-data', async (req, res) => {
  try {
    const response = await axios.get('https://script.google.com/macros/s/AKfycbyZopWBM949LZjfe1YAgMIArJ4C7rDueubC2-UzCyDCHBTn5PEnIqE822kvE9JPyZw/exec', {
      params: {
        access_key: 'jeroen',
        location: 'Haringvliet'
      }
    });
    res.json(response.data);
  } catch (error) {
    console.error('Error fetching data from Google Apps Script:', error);
    res.status(500).send('Error fetching data');
  }
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
