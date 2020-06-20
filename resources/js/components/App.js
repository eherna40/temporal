import React,{useRef, useEffect, useState} from 'react';
import ReactDOM from 'react-dom';
import './styles.scss'
import '../../sass/app.scss'
function App() {

    const [present, setPresent] = useState(false)
    const map =useRef(null);

useEffect(() => {
    setPresent(true)
}, [])

    return (
        <div className="body">
            <div ref={map}  className={`map-container d-flex aling-items-ceter justify-content-center ${present} && inside`}>
            <img src="/assets/img/baseMap.svg" alt="test" />
            </div>
        </div>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
