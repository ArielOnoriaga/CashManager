import axios from 'axios';

export const getBankInfo = (urlApi) => {
  axios
    .get(`/api/${urlApi}`)
    .then(response => {
      return response.data;
    });
};
