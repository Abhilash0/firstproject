import index from './routing/index'
import about from './routing/about'

const routes = [
    {
      path: '/', 
    component: index
  },

   {
      path: '/about', 
    component: about
  },
]

export default routes 