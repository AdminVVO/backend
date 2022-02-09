// document.querySelectorAll('.selected-modal').forEach(setupSelector);
// document.querySelectorAll('.custom-anytime').forEach(setupSelector);

// function setupSelector(selector) {
//   selector.addEventListener('change', e => {
//     // console.log('changed', e.target.value)
//   })

//   selector.addEventListener('mousedown', e => {
//     if(window.innerWidth >= 420) {
//       e.preventDefault();

//       const select = selector.children[0];
//       const dropDown = document.createElement('ul');
//       dropDown.className = "selector-options";

//       [...select.children].forEach(option => {
//         const dropDownOption = document.createElement('li');
//         dropDownOption.textContent = option.textContent;

//         dropDownOption.addEventListener('mousedown', (e) => {
//           e.stopPropagation();
//           select.value = option.value;
//           selector.value = option.value;
//           select.dispatchEvent(new Event('change'));
//           selector.dispatchEvent(new Event('change'));
//           dropDown.remove();
//         });

//         dropDown.appendChild(dropDownOption);   
//       });

//       selector.appendChild(dropDown);

//       // handle click out
//       document.addEventListener('click', (e) => {
//         if(!selector.contains(e.target)) {
//           dropDown.remove();
//         }
//       });
//     }
//   });
// }