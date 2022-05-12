import { HTTP } from './http'

export const getPages = () => {
  return new Promise((resolve, reject) => {
    return HTTP.get('/collections/collection/pages/')
      .then(response => ((response.status < 300) ? resolve : reject)(response))
      .catch(error => reject(error.response))
  })
}
