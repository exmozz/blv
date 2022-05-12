import axios from 'axios'

export const HTTP = axios.create({
  baseURL: 'http://belvebleasing.by/',
  timeout: 10000,
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json'
  }
})
