/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize:{
        sm: '13px',
        sms:'15px',
        // 'xs':'11px',
        // 'ss':'14px',
        // base: '16px',
        xl: '18px',
        '1xl':'20px',
        // '2xl': '28px',
        '3xl': '28px',
        '4xl': '32px',
        // '5xl': '3.052rem',
  
      },

      margin: {
        '4': '0px 0px 16px',

      }
    },
    
    
  },
  plugins: [],
}

