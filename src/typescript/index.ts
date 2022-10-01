import { html } from 'common-tags';

const root = document.getElementById('root') as HTMLDivElement;

const t1 = 'first';
const t2 = 'second';

if (root) {
  root.innerHTML = html`
    <button id="button">click me</button>
    <div id="clickme" class="main main--active">
      <div>${t1}</div>
      <div>${t2}</div>
    </div>
  `;

  const button = document.getElementById('button') as HTMLDivElement;
  const div = document.getElementById('clickme') as HTMLDivElement;

  const btnfn = () => div.classList.toggle('main--active');

  button.addEventListener('click', btnfn);
  div.addEventListener('click', () => console.log('clicked'));
}
