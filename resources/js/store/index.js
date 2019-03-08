import Vue from 'vue';
import Vuex from 'vuex';
import storage from '../storage'

Vue.use(Vuex);

const state = {
    user: JSON.parse(storage.getItem('user')),
};
const getters = {};
const mutations = {
    login(state, user) {
        state.user = user;
        storage.setItem('user', JSON.stringify(user));
    }
};
const actions = {
    login({commit}, user) {
        commit('login', user);
    }
};
export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions
});
