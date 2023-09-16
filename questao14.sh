14) Um cliente solicitou a alteração em uma rotina de cadastro de produtos, para que
alguns campos obrigatórios na tela (código da categoria, descrição detalhada e grupo
do produto) passem a ser opcionais de modo a agilizar o cadastro. Ao receber a
demanda você realizou a análise e as alterações no sistema, sendo disponibilizada
nova versão aos clientes. Quarenta dias após a disponibilização, alguns clientes
entraram em contato com o suporte relatando divergência nas quantidades dos
produtos em alguns relatórios do sistema.

A) Que análise você faria para auxiliar o setor de suporte no atendimento do
cliente?
    Pela visão 'superficial' me parece que remover o código da categoria é de grande impacto no relatório de quantidades de produto por categoria, por exemplo. Eu ao receber a solicitação de remoção, antes de efetuar, levantaria os impactos causados pela alteração e passaria ao cliente. Se ele aprovasse eu realizaria as alterações e implementava correções preventivas nos relatórios.
    A depender da politica, se o campo do banco foi desenhado como Not Null, não poderiamos liberar a opção de o campo ser opcional.
B) Qual o diagnóstico sobre o possível problema? E quais ações devem ser
tomadas para resolver o problema?
    Conforme citado na resposta anterior, a remoção de alguns campos impactaram na fidelidade do sistema. 
    Ações de POP(Procedimento Operacional Padrão), se houver.
    Caso haja opção de o cliente atualizar os inserts antigos com os campos que ficaram nullos, liberar para que ele atualize. 
    Caso não haja, e o impacto já tenha sido irreversivel, comunicar ao cliente.
