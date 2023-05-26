import Quiz from "./Components/Quiz";

require('./bootstrap');

import {createApp} from "vue";

const app = createApp({})

app.component('component-quiz',Quiz)
app.mount('#app')
