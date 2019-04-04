<?php

/* Copyright [2011, 2013, 2017] da Universidade Federal de Juiz de Fora
 * Este arquivo é parte do programa Framework Maestro.
 * O Framework Maestro é um software livre; você pode redistribuí-lo e/ou
 * modificá-lo dentro dos termos da Licença Pública Geral GNU como publicada
 * pela Fundação do Software Livre (FSF); na versão 2 da Licença.
 * Este programa é distribuído na esperança que possa ser  útil,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a Licença Pública Geral GNU/GPL
 * em português para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU, sob o título
 * "LICENCA.txt", junto com este programa, se não, acesse o Portal do Software
 * Público Brasileiro no endereço www.softwarepublico.gov.br ou escreva para a
 * Fundação do Software Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA
 * 02110-1301, USA.
 */

/**
 * MRenderJSONText.
 * Retorna objeto JSON com o resultado do processamento.
 * Objeto JSON = {'id':'json$Id', 'type' : 'page', 'data' : '$content'} : conteúdo é HTML
 */
class MRenderJSONText extends MResult
{

    public function __construct($content = '')
    {
        mtrace('Executing MRenderJSONText');
        parent::__construct();
        $id = 'json' . uniqid();
        $this->ajax->setResponseType('JSON');
        $this->ajax->setId($id);
        $this->ajax->setType('page');
        $this->ajax->setData($content);
        $this->content = $this->ajax->returnData();
    }

    public function apply($request, $response)
    {
        $this->nocache($response);
        $response->setHeader('Content-type', 'Content-type: application/json; charset=UTF-8');
        $response->setOut($this->content);
    }

}
