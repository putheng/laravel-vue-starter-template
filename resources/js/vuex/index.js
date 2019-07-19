import Vue from 'vue'
import Vuex from 'vuex'

import state from './state'
import * as actions from './actions'
import * as mutations from './mutations'
import * as getters from './getters'

/*import*/
import admin from '../app/admin/vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	state,
	actions,
	mutations,
	getters,
    modules: {
		admin:admin,
		/*export*/
    }
})
