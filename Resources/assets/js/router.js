import Admin from './pages/Admin.vue'
import Demo from './pages/Demo.vue'

import AdminLayout from '../../../../../resources/js/views/layouts/LayoutBasic.vue'

const routes = [{
        path: '/slider/demo',
        component: Demo,
      },
      {
        path: '/admin',
        component: AdminLayout,
        meta:{
          requiresAuth:true
        },
        children:[
          {
            path:'world',
            component:Admin,
          },
        ]
    }
]


export default routes;
