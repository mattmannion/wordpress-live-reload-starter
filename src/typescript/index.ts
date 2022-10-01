import { hi } from 'ts/greetings/hi';

console.log(hi);

const root = document.getElementById('root')! as HTMLDivElement;

const t1 = 'first';
const t2 = 'second';

root.innerHTML = `
<div 
  style='display: flex; justify-content: center; align-items: center; flex-flow: column;'
>
  <div>${t1}</div>
  <div>${t2}</div>
</div>
`;
