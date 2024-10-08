import { createStore } from "vuex";
import * as actions from "./actions";
import * as mutations from "./mutations";
import state from "./state";
const store = createStore({
    state,
    getters: {},
    actions: actions,
    mutations: mutations,
});
export default store;
