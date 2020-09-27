#include<ctime>
#include<cstdio>
#include<cstring>
#include<algorithm>
using namespace std;

int N=12,M=5,DEEP=8,Type=1;
int map[100][100],pos[100],tmp[100][100],total=0;
int score[2];
const int f[4][2]={{0,1},{1,0},{1,1},{-1,1}};
const int INF=1e9;
int last[2] = {-1, -1};
int opera;
bool ValidCoord(int x, int y){
	return x<N&&y<M&&x>=0&&y>=0;
}
int getLeftColNumber(){
	int Number = 0;
	for (int i = 0; i < M; i++)
	if (pos[i] < N){
		Number++;
	}
	return Number;
}
int getMinNumber(){
	int res = N;;
	for (int i = 0; i < M; i++)
	if (pos[i] < res){
		res = pos[i];
	}
	return res;
}
int Value(int x){return x*x*x;}
void judger(int type=0){
	int a=clock();
	score[0]=score[1]=0;
	for (int k=0;k<4;k++)
	if (k != 1){
		for (int j=0;j<M;j++)
		for (int i=0;i<pos[j];i++){
			int x=i-f[k][0],y=j-f[k][1];
			
			if (ValidCoord(x,y)&&x<pos[y]&&map[x][y]==map[i][j]){
				tmp[i][j]=tmp[x][y]+1;
				score[map[i][j]]+=Value(tmp[i][j])-Value(tmp[x][y]);
			}else tmp[i][j]=0;
		}
	}
	total+=clock()-a;
	if (type>=1)
	for (int j=0;j<M;j++)
	for (int i=0;i<pos[j];i++){
		
		for (int k=0;k<4;k++)
		if (k != 1)
		for (int o=-1;o<=1;o++)
		if (o){
			int x=i,y=j;
			x+=o*f[k][0];
			y+=o*f[k][1];
			if (ValidCoord(x,y)&&pos[y]<=x){
				score[map[i][j]]+=type;
			}
		}
	}
}
int player(int Si){
	int op;
	do{
		scanf("%d",&op);
		if (op == -1) return 1;
		if (op<M && op>=0 && pos[op]<N){
			map[pos[op]++][op] = Si;
			break;
		}
	}while(1);
	last[Si] = op;
	return 0;
}
void AI_rand(int Si){
	int op;
	do{
		op = rand()%M;
		if (op<M && op>=0 && pos[op]<N){
			map[pos[op]++][op] = Si;
			break;
		}
	}while(1);
}
int search(int deep, int Si, int bound, int type, int last[2]){
	if (deep==0){
		judger(type);
		return score[Si]-score[Si^1];
	}
	int Value=-INF,end=1, leftColNumber = getLeftColNumber(), op = -1;
	for (int i=0;i<M;i++)
	if (pos[i]<N && (i != last[Si ^ 1] || leftColNumber == 1) && (pos[i] - getMinNumber() < 3)){
		end=0;
		int lastTmp[2];
		lastTmp[Si]=i;
		lastTmp[Si^1]=last[Si^1];
		map[pos[i]++][i]=Si;
		int tmp=-search(deep-1,Si^1,Value,type,lastTmp);
		pos[i]--;
		if (-tmp<bound) return tmp;
		if (tmp>Value){
			Value=tmp;
			op = i;
		}
	}
	opera = op;
	if (end){
		judger(type);
		return score[Si]-score[Si^1];
	}
	return Value;
}
void AI_strong(int Si,int deep,int type=0){
	int op;
	search(deep + 1, Si, -INF, type, last);
	op=opera;
	map[pos[op]++][op]=Si;
	last[Si]=op;
	printf("%d\n",op);
	fflush(stdout);
}
void print(){
	for (int i=N-1;i>=0;i--){
		printf("|");
		for (int j=0;j<M;j++)
		if (i<pos[j]){
			printf("%d|",map[i][j]);
		}else{
			printf(" |");
		}
		printf("\n");
	}
	printf("%d %d\n\n",score[0],score[1]);
}
int main(){
	//scanf("%d%d%d%d",&N,&M,&DEEP,&Type);
	srand(time(0));
	//print();
	for (int i=0;i<=N*M;i+=2){
		if (player(0)) break;
		//AI_rand(0);
		//AI_strong(0,7,1);
		judger();
		//print();
		AI_strong(1,DEEP,Type);
		judger();
		//print();
	}
	//printf("%d %d\n",clock(),total);
	printf("%d %d\n",score[0], score[1]);
	return 0;
}
