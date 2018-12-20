gdjs.CharacterSelectionCode = {};
gdjs.CharacterSelectionCode.GDPlayer1Objects1= [];
gdjs.CharacterSelectionCode.GDPlayer1Objects2= [];
gdjs.CharacterSelectionCode.GDPlayer1Objects3= [];
gdjs.CharacterSelectionCode.GDPlayer2Objects1= [];
gdjs.CharacterSelectionCode.GDPlayer2Objects2= [];
gdjs.CharacterSelectionCode.GDPlayer2Objects3= [];
gdjs.CharacterSelectionCode.GDMessageObjects1= [];
gdjs.CharacterSelectionCode.GDMessageObjects2= [];
gdjs.CharacterSelectionCode.GDMessageObjects3= [];
gdjs.CharacterSelectionCode.GDPlayer3Objects1= [];
gdjs.CharacterSelectionCode.GDPlayer3Objects2= [];
gdjs.CharacterSelectionCode.GDPlayer3Objects3= [];

gdjs.CharacterSelectionCode.conditionTrue_0 = {val:false};
gdjs.CharacterSelectionCode.condition0IsTrue_0 = {val:false};
gdjs.CharacterSelectionCode.condition1IsTrue_0 = {val:false};


gdjs.CharacterSelectionCode.mapOfGDgdjs_46CharacterSelectionCode_46GDPlayer1Objects2Objects = Hashtable.newFrom({"Player1": gdjs.CharacterSelectionCode.GDPlayer1Objects2});gdjs.CharacterSelectionCode.mapOfGDgdjs_46CharacterSelectionCode_46GDPlayer2Objects2Objects = Hashtable.newFrom({"Player2": gdjs.CharacterSelectionCode.GDPlayer2Objects2});gdjs.CharacterSelectionCode.eventsList0x693e70 = function(runtimeScene) {

{

gdjs.CharacterSelectionCode.GDPlayer1Objects2.createFrom(runtimeScene.getObjects("Player1"));

gdjs.CharacterSelectionCode.condition0IsTrue_0.val = false;
{
gdjs.CharacterSelectionCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.CharacterSelectionCode.mapOfGDgdjs_46CharacterSelectionCode_46GDPlayer1Objects2Objects, runtimeScene, true, false);
}if (gdjs.CharacterSelectionCode.condition0IsTrue_0.val) {
{runtimeScene.getGame().getVariables().get("selectedCharacter").setString("Player1");
}{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Game", false);
}}

}


{

gdjs.CharacterSelectionCode.GDPlayer2Objects2.createFrom(runtimeScene.getObjects("Player2"));

gdjs.CharacterSelectionCode.condition0IsTrue_0.val = false;
{
gdjs.CharacterSelectionCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.CharacterSelectionCode.mapOfGDgdjs_46CharacterSelectionCode_46GDPlayer2Objects2Objects, runtimeScene, true, false);
}if (gdjs.CharacterSelectionCode.condition0IsTrue_0.val) {
{runtimeScene.getGame().getVariables().get("selectedCharacter").setString("Player2");
}{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Game", false);
}}

}


{


{
{runtimeScene.getGame().getVariables().get("selectedCharacter").setString("Player3");
}{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Game", false);
}}

}


}; //End of gdjs.CharacterSelectionCode.eventsList0x693e70
gdjs.CharacterSelectionCode.eventsList0xb1208 = function(runtimeScene) {

{



}


{



}


{


gdjs.CharacterSelectionCode.condition0IsTrue_0.val = false;
{
gdjs.CharacterSelectionCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.CharacterSelectionCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.CharacterSelectionCode.eventsList0x693e70(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.CharacterSelectionCode.eventsList0xb1208


gdjs.CharacterSelectionCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();
gdjs.CharacterSelectionCode.GDPlayer1Objects1.length = 0;
gdjs.CharacterSelectionCode.GDPlayer1Objects2.length = 0;
gdjs.CharacterSelectionCode.GDPlayer1Objects3.length = 0;
gdjs.CharacterSelectionCode.GDPlayer2Objects1.length = 0;
gdjs.CharacterSelectionCode.GDPlayer2Objects2.length = 0;
gdjs.CharacterSelectionCode.GDPlayer2Objects3.length = 0;
gdjs.CharacterSelectionCode.GDMessageObjects1.length = 0;
gdjs.CharacterSelectionCode.GDMessageObjects2.length = 0;
gdjs.CharacterSelectionCode.GDMessageObjects3.length = 0;
gdjs.CharacterSelectionCode.GDPlayer3Objects1.length = 0;
gdjs.CharacterSelectionCode.GDPlayer3Objects2.length = 0;
gdjs.CharacterSelectionCode.GDPlayer3Objects3.length = 0;

gdjs.CharacterSelectionCode.eventsList0xb1208(runtimeScene);
return;
}
gdjs['CharacterSelectionCode'] = gdjs.CharacterSelectionCode;
