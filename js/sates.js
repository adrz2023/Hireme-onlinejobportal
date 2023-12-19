const API='https://cdn-api.co-vin.in/api/v2/admin/location/states';
let STATES=[];
const fetchStates=async()=>{
    const response=await fetch(API);
    const data=await response.json();
    return data;
}

const setStates=async()=>{
    const data=await fetchStates();
    STATES=data.states;
    const states=data.states.map(st=>`<option value="${st.state_name}">${st.state_name}</option>`).reduce((a,b)=>a+b)
    const selectTag=document.getElementById("stateId");
    selectTag.innerHTML=states
}


const getDistricts=async()=>{
    const selectTag=document.getElementById("stateId");
    const cityTag=document.getElementById("cityId");
    const stateId=STATES.filter(state=>state.state_name==selectTag.value)[0].state_id;
    const response=await fetch(`https://cdn-api.co-vin.in/api/v2/admin/location/districts/${stateId}`);
    const data=await response.json();
    const states=data.districts.map(st=>`<option value="${st.district_name}">${st.district_name}</option>`).reduce((a,b)=>a+b)
    cityTag.innerHTML=states
}

setStates()