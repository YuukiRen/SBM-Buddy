import Api from '@/services/Api'

export default{
    register(credentials){
        return Api().post('register', credentials)
    }
}

// AuthenticationServices.register({
//     email: 'test@test.com',
//     password: 'cobacoba'
// })