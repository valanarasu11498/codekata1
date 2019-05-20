#include <stdio.h>

int main()
{
    int N[10],s,K,i,sum=0;
    scanf("%d%d",&s,&K);
    if(s>0)
    {
        if(K<=s)
        {
           for(i=0;i<s;i++)
           {
             scanf("%d",&N[i]);  
           }
           for(i=0;i<K;i++)
           {
              sum=sum+N[i];
           }
           printf("%d",sum);
        }
        else
        {
            printf("K size should be smaller or equal than size of array");
        }
        
    }
    else
    {
        printf("invalid,array size should be greater than zero");
    }
    return 0;
}
