import React, { useState } from 'react';
import api from '../../services/api';

import Top_Left_Side_Menu from '../../components/Top_Left_Side_Menu';
import Bottom_Right_Side_Menu from '../../components/Bottom_Right_Side_Menu';
import Header from '../../components/Home_Header';
import Title from '../../components/Title';

import { Screen } from './styles';

export default function ViewTeam() {
  document.title = "Ver equipe";
  const access_token = 'Bearer'.concat(sessionStorage.getItem("access_token"));
  const urlData = window.location.search.slice(1);

  const [team, setTeam] = useState();


  // useEffect(() => {
  //   api.get(`/api/equipe/`, { headers: { Authorization: access_token } })
  //   .then(response => setTeam(response.data))
  //   .catch(error => console.log(error.response))
  // }, [])


  return (
    <Screen>
      <Top_Left_Side_Menu />
      <Bottom_Right_Side_Menu />

      <div className="container">
        <Header />

        {/* <Title title={team.nome_equipe} /> */}
        <Title title="Teste1" />

        <div className="row">
          <div className="col-md-6">
            <div className="left-box-gray">
              {/* {console.log(team)} */}
            </div>
          </div>
          <div className="col-md-6">
            <div className="right-box-blue-gradient">

            </div>
          </div>
        </div>
      </div>
    </Screen>
  )
}
