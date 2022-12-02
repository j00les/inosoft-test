import Vue from "vue";
import Vuex from "vuex";
import { instance } from "../apis/axiosInstance";
import { FETCH_COMPANIES, FETCH_CURRENCIES, FETCH_MEASUREMENT } from "./mutation-types";

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {
    UOMData: [],
    companies: [],
    currencies: [],
  },

  mutations: {
    [FETCH_MEASUREMENT](state, data) {
      state.UOMData = data;
    },

    [FETCH_COMPANIES](state, data) {
      state.companies = data;
    },

    [FETCH_CURRENCIES](state, data) {
      state.currencies = data;
    },
  },

  actions: {
    async fetchUOM(context) {
      try {
        const { data } = await instance({
          url: "/measurements",
          method: "GET",
        });
        context.commit(FETCH_MEASUREMENT, data);
      } catch (error) {
        console.log(error);
      }
    },

    async fetchCompanies(context) {
      try {
        const { data } = await instance({
          url: "/companies",
          method: "GET",
        });
        context.commit(FETCH_COMPANIES, data);
      } catch (error) {
        console.log(error);
      }
    },

    async fetchCurrencies(context) {
      try {
        const { data } = await instance({
          url: "/currencies",
          method: "GET",
        });
        context.commit(FETCH_CURRENCIES, data);
      } catch (error) {
        console.log(error);
      }
    },
  },
});
