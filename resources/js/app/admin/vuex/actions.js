import axios from 'axios'


export const fetchUser = ({commit}) => {
	return axios.get('/api/admin/user').then((response) => {
		commit('setUser', response.data.data)

		return Promise.resolve(response)
	})
}