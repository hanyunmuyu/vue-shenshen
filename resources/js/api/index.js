import axios from 'axios'
import router from '../router';

axios.interceptors.response.use(
    response => {
        if (response.data.code !== 200) {
            // console.log(response.data);
            router.push({path: '/'});
        }
        return response;

    },

    error => {
        return Promise.reject(error)

    }
);

function get(url, params) {
    return axios.get(url, params).then((d) => {
        return d.data;
    }).then((v) => {
        return v;
    });
}

function post(url, params) {
    return axios.post(url, params).then((d) => {
        return d.data;
    }).then((v) => {
        return v;
    });
}

export default {
    getNewsRecommend: function (params) {
        return get('api/v1/index', {
            params: params
        })
    },
    // 列表接口
    getNewsLists: function (params) {
        return get('api/news', {
            params: params
        })
    },
    // 详情接口
    getNewsDetail: function (id) {
        return axios.get('api/news/' + id)
    },
    login: function (params) {
        return post('api/v1/login', params);
    }
}
